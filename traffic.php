  	<!-- custom navigation bar left linking -->
<script src="http://maps.google.com/maps/api/js?sensor=true"></script>\



<style>
	.map_canvas{
		width: 95%;
		height: 480px;
		background: green;
		position: relative;
	}
</style>

  	<?php include 'layout/left_nav.php';?> <!-- head is here -->

<body>
	<div class="row">
	<div class="col-sm-1">
	<div id="lat"> </div>
	<!-- <script >getLocation();</script> -->

	</div>
	<div class="col-sm-11">
	<button style="border-radius:10px;" onclick="getLocation()">Get my location</button>
	<p id="demo"></p>

	<script>
var x = document.getElementById("demo");

function getLocation() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition);
    } else { 
        x.innerHTML = "Geolocation is not supported by this browser.";
    }
}

function showPosition(position) {
    x.innerHTML = "Latitude: " + position.coords.latitude + 
    "<br>Longitude: " + position.coords.longitude;
    var coords = new google.maps.LatLan(position.coords.latitude, position.coords.longitude);
}
</script>


	<div class="container" style="padding-top: 50px; width:100%;">

    <div class="panel-body">
    	<section class="map_canvas" id="map_can" style=" border: 1px solid; border-radius: 8px;">
			<script>
		      var map;
		      function initMap() {
		        map = new google.maps.Map(document.getElementById('map_can'), {
		          center: {lat: 23.770576, lng: 90.422700},
		          zoom: 15
		        });

		        var marker = new google.maps.Marker({map: map, position: coords});
		      }
		    </script>
		    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyArfEmAhIUWdwZs-0Obp6YAVQj6OYagPtc&callback=initMap" async defer></script>
		</section>
    
  </div>
</div>
</div>
	</div>
</body>








<!-- footer  link-->
  	<?php include 'layout/footer.php';?>  <!-- head is here -->
</html>