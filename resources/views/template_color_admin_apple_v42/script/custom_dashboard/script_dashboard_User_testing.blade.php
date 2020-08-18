<script src='https://api.mapbox.com/mapbox-gl-js/v1.12.0/mapbox-gl.js'></script>

<script>
    $(document).ready(function() {
        App.init();
    });
</script>



<script>
	mapboxgl.accessToken = 'pk.eyJ1Ijoic3VwZXJhcnlhIiwiYSI6ImNrZHgwYmwyMTBrZWUyem53N3dyMzJsdDUifQ.RO9aoTj1u51IGq1OyeaUjA';
var map = new mapboxgl.Map({
container: 'map', // container id
style: 'mapbox://styles/mapbox/streets-v11', // style URL
    center: [112.723525, -7.332499], // starting position [lng, lat]
zoom: 11 // starting zoom
});
</script>
