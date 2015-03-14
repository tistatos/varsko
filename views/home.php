 <script type="text/javascript"
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAcxFaGz1aSDhl2f0eWsBiHlKC0-8K5pu8">
    </script>
    <script type="text/javascript"
      src="js/mapstyle.js"></script>
    <script type="text/javascript">
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
          mapTypeControl: false
        };

        var map = new google.maps.Map(document.getElementById('map-canvas'),
            mapOptions);
        map.data.loadGeoJson('geojson/allData.geojson');
        map.setOptions({styles: styles});
       map.data.setStyle(function(feature){
          return ({
            strokeWeight: 1,
            fillColor: setColor(feature.getProperty('LANSNAMN'))
          })
        });
        // map.data.addListener('mouseover', function(event) {
        //   map.data.revertStyle();
        //   console.log(event.feature.getId())
        //   console.log(event.feature.getProperty('FranDatum'))
        //   map.data.overrideStyle(event.feature, {strokeWeight: 8});
        // });
      }

      var setColor = function(featureProperty)
      {
        console.log(featureProperty);
        if(featureProperty != '')
          return 'gray';
        else
          return 'red';
      }

      google.maps.event.addDomListener(window, 'load', initialize);
    </script>


	<div class="row text-center">
		<div class="col-md-8">
			<div id="map-canvas" style="width:auto; height:80%;">
			</div>
		</div>
  		<div class="col-md-4 text-center">
  			<h3>Listade händelser</h3>
        <ul>
          <li id="event1">Lorem ipsum</li>
          <li id="event2">Lorem ipsum</li>
          <li id="event3">Lorem ipsum</li>
          <li id="event4">Lorem ipsum</li>
          <li id="event5">Lorem ipsum</li>
          <li id="event6">Lorem ipsum</li>
          <li id="event7">Lorem ipsum</li>
          <li id="event8">Lorem ipsum</li>
          <li id="event9">Lorem ipsum</li>
          <li id="event10">Lorem ipsum</li>
          <li id="event11">Lorem ipsum</li>
        </ul>
  		</div>
</div>
  <div class="row text-center">
      <div class="col-md varsko-information" style="padding-top:100px;">

          <div class="col-md-4 text-center">
              <img src="img/sms_w.png" alt="" style="height:12%;">
              <h2>SMS</h2>
          </div>
          
          <div class="col-md-4 text-center">
              <img src="img/mail_w.png" alt="" style="height:12%;">
              <h2>Mail</h2>
          </div>
            
          <div class="col-md-4 text-center">
              <img src="img/facebook_twitter_w.png" alt="" style="height:12%;">
              <h2>Sociala medier</h2>
          </div>

 <h1 style="padding-top:200px;">
          Din samhällsinformation via sms, mail eller
sociala medier

        </h1>

      <p>
        Varsko låter dig få reda på samhällsinformation via sms eller mail. Genom att ange ett kontaktsätt och ett intresseområde så kan vi meddela er om något händer i erat område. Tjänsten är kostnadsfri samt fri från reklam. Ingen data om er som person sparas eller delas med tredje part.
      </p>


      </div>
  </div>
  <div class="row text-center" style="margin-bottom:100px; margin-top:100px;">
<div class="col-md-1 text-center">
</div>
	  <div class="col-md-4 text-center">
	  	<h1>Registrera</h1>
      <img src="img/register.png" alt="" style="height:12%; margin:40px;">
	  	<p>Här kan du registrera dig för tjänsten. Det är gratis och reklamfritt. För att registrera dig på tjänsten krävs det att du har antingen en fungeranad mail eller en mobiltelefon som kan ta emot sms.</p>
      <a href="register">
	  	  <button type="submit" class="btn btn-default">Registrera</button>
      </a>
	  </div>
<div class="col-md-1 text-center">
</div>
<div class="col-md-1 text-center">
</div>
	  <div class="col-md-4 text-center">
	  	<h1>Anmäl iaktagelse</h1>
      <img src="img/report.png" alt="" style="height:12%; margin:40px;">
	  	<p>Här kan du anmäla en iaktagelse. Kom ihåg att ringa 112 för akuta ärenden eller 114 14. För att anmäla en iaktagelse krävs det att du har en fungeranad mail eller en mobiltelefon som kan ta emot sms. </p>
	  	<button type="submit" class="btn btn-danger">Anmäl</button>
	  </div>
<div class="col-md-1 text-center">
</div>
	</div>
