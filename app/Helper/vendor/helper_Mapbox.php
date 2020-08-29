<?php 

    function helper_mapbox_marker($long,$lat)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi    = '';
            
        // ------------------------------------------------------------------------- ACTION
            $isi = '
            var marker = new mapboxgl.Marker()
                .setLngLat(['.$long.', '.$lat.'])
                .addTo(map);
            ';

        // ------------------------------------------------------------------------- SEND
            $word = $isi;
            return $word;
        //////////////////////////////////////////////////////////////////////////// 		
    }  

    function helper_mapbox_generate_map()
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi    = '';
            
        // ------------------------------------------------------------------------- ACTION
            $isi = '
            mapboxgl.accessToken = "pk.eyJ1Ijoic3VwZXJhcnlhIiwiYSI6ImNrZHgwYmwyMTBrZWUyem53N3dyMzJsdDUifQ.RO9aoTj1u51IGq1OyeaUjA";

            var map = new mapboxgl.Map({
                container: "map",
                style: "mapbox://styles/mapbox/streets-v11",
                center: [112.740972, -7.271391],
                zoom: 11.5 
            });
            ';

        // ------------------------------------------------------------------------- SEND
            $word = $isi;
            return $word;
        //////////////////////////////////////////////////////////////////////////// 		
    }  

    function helper_mapbox_geojson($nama,$lat,$long,$filename,$dmha,$icon)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi    = '';
            
        // ------------------------------------------------------------------------- ACTION
            $isi = '
            {
                "type": "Feature",
                "properties": 
                 {
                    "description": "'.$nama.'",
                    "dmha": "'.$dmha.'",
                    "filename": "'.$filename.'",
                    "icon": "'.$icon.'"
                },
                "geometry":  
                {
                    "type": "Point",
                    "coordinates": ['.$long.', '.$lat.']
                }
            },
            ';

        // ------------------------------------------------------------------------- SEND
            $word = $isi;
            return $word;
        //////////////////////////////////////////////////////////////////////////// 		
    }     

    function helper_mapbox_script_mapbox_flyto($nama,$lat,$long)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi    = '';
            
        // ------------------------------------------------------------------------- ACTION
            $isi = '
            document.getElementById("'.$nama.'").addEventListener("click", function() {
                map.flyTo({
                    center: [
                        '.$long.',
                        '.$lat.'
                    ],
                    
                    essential: true ,
                    zoom: 17
                });
            });
            ';

        // ------------------------------------------------------------------------- SEND
            $word = $isi;
            return $word;
        //////////////////////////////////////////////////////////////////////////// 		
    }  

    function helper_mapbox_NavigationControl($agent)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi    = '';
            
        // ------------------------------------------------------------------------- ACTION
            if($agent->isDesktop() == 1)
            {
                $isi = 'map.addControl(new mapboxgl.NavigationControl());';
            }

        // ------------------------------------------------------------------------- SEND
            $word = $isi;
            return $word;
        //////////////////////////////////////////////////////////////////////////// 		
    }  