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

<script src='https://api.mapbox.com/mapbox-gl-js/v1.12.0/mapbox-gl.js'></script>

<script>    
    $(document).ready(function() {
        App.init();
    });
</script>

<script>

    {!!helper_mapbox_generate_map()!!}
    document.getElementById("activitySelector").addEventListener("change", function() {
        {!!dmha_344_script_mapbox_flyto()!!}
    });
    
    map.on('load', function() {
        map.addSource('places', {
            'type': 'geojson',
            'data': {
                'type': 'FeatureCollection',
                'features': [
                    {!!dmha_344_show_mapbox_marker()!!}
                ]
            }
        });

        // Add a layer showing the places.
        map.addLayer({
            'id': 'places',
            'type': 'symbol',
            'source': 'places',
            'layout': {
                'icon-image': '{icon}',
                'icon-allow-overlap': true
            }
        });
        
        // When a click event occurs on a feature in the places layer, open a popup at the
        // location of the feature, with description HTML from its properties.
        map.on('click', 'places', function(e) {
            var coordinates = e.features[0].geometry.coordinates.slice();
            var description = e.features[0].properties.description;

            // Ensure that if the map is zoomed out such that multiple
            // copies of the feature are visible, the popup appears
            // over the copy being pointed to.
                while (Math.abs(e.lngLat.lng - coordinates[0]) > 180) {
                    coordinates[0] += e.lngLat.lng > coordinates[0] ? 360 : -360;
                }
            
                new mapboxgl.Popup() .setLngLat(coordinates).setHTML(description).addTo(map);
        });
    
        // Change the cursor to a pointer when the mouse is over the places layer.
        map.on('mouseenter', 'places', function() {
            map.getCanvas().style.cursor = 'pointer';
        });
    
        // Change it back to a pointer when it leaves.
        map.on('mouseleave', 'places', function() {
            map.getCanvas().style.cursor = '';
        });
    });
    
    {!!helper_mapbox_NavigationControl($agent)!!}
</script>