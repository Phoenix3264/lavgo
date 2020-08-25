<!-- ================== BEGIN BASE JS ================== -->
<script src="{{ asset('/public/').'/'.$root }}/assets/plugins/jquery/jquery-3.3.1.min.js"></script>
<script src="{{ asset('/public/').'/'.$root }}/assets/plugins/bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
<!--[if lt IE 9]>
    <script src="{{ asset('/public/').'/'.$root }}/assets/crossbrowserjs/html5shiv.js"></script>
    <script src="{{ asset('/public/').'/'.$root }}/assets/crossbrowserjs/respond.min.js"></script>
    <script src="{{ asset('/public/').'/'.$root }}/assets/crossbrowserjs/excanvas.min.js"></script>
<![endif]-->
<script src="{{ asset('/public/').'/'.$root }}/assets/plugins/js-cookie/js.cookie.js"></script>
<script src="{{ asset('/public/').'/'.$root }}/assets/plugins/scrollMonitor/scrollMonitor.js"></script>
<script src="{{ asset('/public/').'/'.$root }}/assets/plugins/paroller/jquery.paroller.min.js"></script>
<script src="{{ asset('/public/').'/'.$root }}/assets/js/one-page-parallax/apps.min.js"></script>
<!-- ================== END BASE JS ================== -->

<script>    
    $(document).ready(function() {
        App.init();
    });
</script>


<script src='https://api.mapbox.com/mapbox-gl-js/v1.12.0/mapbox-gl.js'></script>

<script>
    $(document).ready(function() {
        App.init();
    });
</script>

<script>

    {!!helper_mapbox_generate_map()!!}

    var geojson = {
        'type': 'FeatureCollection',
        'features': 
        [
            {!!dmha_364_show_mapbox_marker()!!}
            {!!dmha_344_show_mapbox_marker()!!}
        ]
    };
	
    // add markers to map
    geojson.features.forEach(function(marker) {
        // create a DOM element for the marker
        var el = document.createElement('div');

        el.className = 'marker';
        el.style.backgroundImage = 'url(http://localhost/lavgo/storage/app/public/storage/dmha_'+marker.properties.dmha+'/'+marker.properties.filename+')';
        el.style.width = marker.properties.iconSize[1] + 'px';
        el.style.height = marker.properties.iconSize[1] + 'px';
        
        el.addEventListener('click', function() {
            window.alert(marker.properties.message);
        });
        
        // add marker to map
        new mapboxgl.Marker(el)
            .setLngLat(marker.geometry.coordinates)
            .addTo(map);
    });
    


    {!!dmha_364_script_mapbox_flyto()!!}
    
    map.addControl(new mapboxgl.NavigationControl());
</script>