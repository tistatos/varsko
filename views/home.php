 <script type="text/javascript"
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAcxFaGz1aSDhl2f0eWsBiHlKC0-8K5pu8">
    </script>
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
        map.data.loadGeoJson('geojson/lansytor.geojson');
      }
      google.maps.event.addDomListener(window, 'load', initialize);
    </script>
<div id="map-canvas" style="width:20%; height:80%;"></div>