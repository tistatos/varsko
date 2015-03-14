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


	<div class="row text-center">

		<div class="col-md-8"><h3>Sverigekarta</h3>
			<div id="map-canvas" style="width:auto; height:80%;">
			</div>
		</div>
  		<div class="col-md-4 text-center">
  			<h3>Listade händelser</h3>

  		</div>

	</div>

	 <div class="row text-center">

	  <div class="col-md-6 text-center">
	  	<h2>Registrera</h2>
	  	<p>Här kan du registrera dig för tjänsten</p>
      <a href="register">
	  	  <button type="submit" class="btn btn-default">Registrera</button>
      </a>
	  </div>

	  <div class="col-md-6 text-center ">
	  	<h2>Anmäl iaktagelse</h2>
	  	<p>Här kan du anmäla en iaktagelse</p>
	  	<button type="submit" class="btn btn-danger">Anmäl</button>
	  </div>

	</div>
