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
        map.data.addListener('mouseover', function(event) {
          map.data.revertStyle();
          console.log(event.feature.getId())
          map.data.overrideStyle(event.feature, {strokeWeight: 8});
        });
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
<div class="col-md varsko-information">

<img src="img/logo_w.png" alt="">

<p>Varsko låter dig få reda på samhällsinformation via sms eller mail. Genom att ni anger ett kontaktsätt samt et intresseområde kan vi meddela er om något händer i erat område. Tjänsten är kostnadsfri samt fri från reklam. Ingen data om er som person sparas eller delas.
</p>

</div>


	  <div class="col-md-6 text-center">
	  	<h2>Registrera</h2>
      <img src="img/create1.png" alt="" style="width:10%;">
	  	<p>Här kan du registrera dig för tjänsten</p>
      <a href="register">
	  	  <button type="submit" class="btn btn-default">Registrera</button>
      </a>
	  </div>

	  <div class="col-md-6 text-center ">
	  	<h2>Anmäl iaktagelse</h2>
      <img src="img/bull1.png" alt="" style="width:10%;">
	  	<p>Här kan du anmäla en iaktagelse</p>
	  	<button type="submit" class="btn btn-danger">Anmäl</button>
	  </div>

	</div>
