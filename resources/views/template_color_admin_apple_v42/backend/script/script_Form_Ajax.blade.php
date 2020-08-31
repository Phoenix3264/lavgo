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
<script src="{{ asset('/public/').'/'.$root }}/assets/js/demo/form-plugins.demo.min.js"></script>
<!-- ================== END PAGE LEVEL JS ================== -->

<script>    
{!!ajax_header_csrf()!!}

$(document).ready(function(){
    App.init();
    FormPlugins.init();
    {!!ajax_form($AUTH_ID,$transform_ID,$dmha_271,$PARAM_2,$PARAM_3,$id_data)!!} 
});
</script>