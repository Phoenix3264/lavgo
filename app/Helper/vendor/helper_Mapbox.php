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

    function helper_mapbox_geojson($nama,$lat,$long,$filename,$dmha)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi    = '';
            
        // ------------------------------------------------------------------------- ACTION
            $isi = '
            {
                "type": "Feature",
                "properties": 
                {
                    "message": "'.$nama.'",
                    "iconSize": [60, 60],
                    "dmha": "'.$dmha.'",
                    "filename": "'.$filename.'"
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