<div id='map' style='width: 400px; height: 300px;'></div>


<script>
	mapboxgl.accessToken = 'sk.eyJ1Ijoic3VwZXJhcnlhIiwiYSI6ImNrZHlmamtrZzEwZXAyenFpNHNzeTlicmUifQ.RhELkf8RaVIDoXRbvXPrqA';
var map = new mapboxgl.Map({
container: 'map', // container id
style: 'mapbox://styles/mapbox/streets-v11', // style URL
center: [-74.5, 40], // starting position [lng, lat]
zoom: 9 // starting zoom
});
</script>