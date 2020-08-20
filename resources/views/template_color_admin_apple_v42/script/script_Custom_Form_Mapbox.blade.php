<!-- ================== BEGIN PAGE LEVEL JS ================== -->
<script src="{{ asset('/public/').'/'.$root }}/assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
<script src="{{ asset('/public/').'/'.$root }}/assets/plugins/ionRangeSlider/js/ion-rangeSlider/ion.rangeSlider.min.js"></script>
<script src="{{ asset('/public/').'/'.$root }}/assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
<script src="{{ asset('/public/').'/'.$root }}/assets/plugins/masked-input/masked-input.min.js"></script>
<script src="{{ asset('/public/').'/'.$root }}/assets/plugins/bootstrap-timepicker/js/bootstrap-timepicker.min.js"></script>
<script src="{{ asset('/public/').'/'.$root }}/assets/plugins/password-indicator/js/password-indicator.js"></script>
<script src="{{ asset('/public/').'/'.$root }}/assets/plugins/bootstrap-combobox/js/bootstrap-combobox.js"></script>
<script src="{{ asset('/public/').'/'.$root }}/assets/plugins/bootstrap-select/bootstrap-select.min.js"></script>
<script src="{{ asset('/public/').'/'.$root }}/assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.min.js"></script>
<script src="{{ asset('/public/').'/'.$root }}/assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput-typeahead.js"></script>
<script src="{{ asset('/public/').'/'.$root }}/assets/plugins/jquery-tag-it/js/tag-it.min.js"></script>
<script src="{{ asset('/public/').'/'.$root }}/assets/plugins/bootstrap-daterangepicker/moment.js"></script>
<script src="{{ asset('/public/').'/'.$root }}/assets/plugins/bootstrap-daterangepicker/daterangepicker.js"></script>
<script src="{{ asset('/public/').'/'.$root }}/assets/plugins/select2/dist/js/select2.min.js"></script>
<script src="{{ asset('/public/').'/'.$root }}/assets/plugins/bootstrap-eonasdan-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>
<script src="{{ asset('/public/').'/'.$root }}/assets/plugins/bootstrap-show-password/bootstrap-show-password.js"></script>
<script src="{{ asset('/public/').'/'.$root }}/assets/plugins/bootstrap-colorpalette/js/bootstrap-colorpalette.js"></script>
<script src="{{ asset('/public/').'/'.$root }}/assets/plugins/jquery-simplecolorpicker/jquery.simplecolorpicker.js"></script>
<script src="{{ asset('/public/').'/'.$root }}/assets/plugins/clipboard/clipboard.min.js"></script>
<script src="{{ asset('/public/').'/'.$root }}/assets/js/demo/form-plugins.demo.js"></script>
<!-- ================== END PAGE LEVEL JS ================== -->
<script src='https://api.mapbox.com/mapbox-gl-js/v1.12.0/mapbox-gl.js'></script>

<script>    
{!!ajax_header_csrf()!!}

$(document).ready(function(){
    App.init();
    FormPlugins.init();
    {!!ajax_form($AUTH_ID,$transform_ID,$dmha_271,$PARAM_2,$PARAM_3,$id_data)!!} 
});

</script>


<script>
	mapboxgl.accessToken = 'pk.eyJ1Ijoic3VwZXJhcnlhIiwiYSI6ImNrZHgwYmwyMTBrZWUyem53N3dyMzJsdDUifQ.RO9aoTj1u51IGq1OyeaUjA';

    var map = new mapboxgl.Map({
        container: 'map', // container id
        style: 'mapbox://styles/mapbox/streets-v11', // style URL
        center: [112.740972, -7.271391], // starting position [lng, lat]
        zoom: 11.5 // starting zoom
    });

    
    var geolocate = new mapboxgl.GeolocateControl();

map.addControl(geolocate);

geolocate.on('geolocate', function(e) {
    var lon = e.coords.longitude;
    var lat = e.coords.latitude
    var position = [lon, lat];
    console.log(position);
    document.getElementById('form-80').value= lat;

    document.getElementById('form-81').value=lon;
    
});
</script>