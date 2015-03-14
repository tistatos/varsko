function initialize() {
  var mapOptions = {
    center: { lat: 62.19, lng: 18.03},
    zoom: 5,
    disableDefaultUI: false,
    draggable: false,
    maxZoom: 5,
    minZoom: 5,
    zoomControl: false,
    streetViewControl: false,
    overviewMapControl: false,
    mapTypeControl: false,
    clickToGo: false,
    panControl: false
  };

  var map = new google.maps.Map(document.getElementById('map-canvas'),
      mapOptions);
  map.data.addListener('addfeature', function(event) {
    var lansnamn = event.feature.getProperty('LANSNAMN');
    if(lansnamn === '')
    {
      var omrade = event.feature.getProperty('Omradenamn');
      var code = event.feature.getProperty('Omradekod');
      code = Math.floor(code/100);
      var besk = event.feature.getProperty('Beskrivnin');
      besk = besk.substring(0,besk. indexOf('.')+1);
      var date = event.feature.getProperty('TillDatum');
      var eventType = event.feature.getProperty('Olycksty_1');
      var html ='<li lan-code="'+ code +'">';
      html += '<img class="eventIcon"src="img/'+ getIcon(eventType) +'.png" alt=""><h4 class="eventPlace">' + omrade + '</h4>';
      html += '<p>' + besk +'<p> </li>';

      $('#eventsNow').append(html);
      event.feature.setGeometry(undefined);
      map.data.forEach(function(feature){
        var lanCode = feature.getProperty('OBJECTID');
        if(lanCode == code)
        {
          feature.setProperty('happening', 'yes');
        }
      });
    }
    else
    {
      var code = event.feature.getProperty('OBJECTID');
    }
  });
  map.data.loadGeoJson("geojson/allData.geojson");

  map.setOptions({styles: styles});
  map.data.setStyle(function(feature){
    return ({
      strokeWeight: 2,
      fillColor: setColor(feature.getProperty('happening')),
      strokeColor: 'white'
    })
  });

  map.data.addListener('mouseover', function(event) {
     map.data.revertStyle();
     if(event.feature.getProperty('happening') != undefined)
     {
       map.data.overrideStyle(event.feature, {fillOpacity: .5});
       hilightEvents(event.feature.getProperty('OBJECTID'));
     }
  });
  map.data.addListener('mouseout', function(event) {
     map.data.revertStyle();
     $('#eventsNow').children('li').each(function () {
       $(this).removeClass("ActiveEvent");
     });
  });
}
google.maps.event.addDomListener(window, 'load', initialize);



/**
 * Hilights the events of area being hovered
 */
var hilightEvents = function(lancode)
{

   $('#eventsNow').children('li').each(function () {
    if($(this).attr('lan-code') == lancode)
    {
      $(this).addClass("ActiveEvent");
    }
    else
    {
      $(this).removeClass("ActiveEvent");
    }
   });
}


/*
  Set color of map
 */
var setColor = function(featureProperty)
{
  if(featureProperty === 'yes')
    return 'red'; // the areas active
  else
    return '#57ab6d'; //passive areas
}


var getIcon = function(eventType)
{
  if( eventType.indexOf('Brand') >= 0){
    return 'fire_black';
  }
  else if( eventType.indexOf('Omfattande') >= 0){
    return 'blackout';
  }
  else if( eventType.indexOf('Utsläpp') >= 0){
    return 'airpollution_black';
  }
  else
    return '';
}