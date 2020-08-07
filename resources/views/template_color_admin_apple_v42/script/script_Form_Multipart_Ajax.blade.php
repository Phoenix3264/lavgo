<!-- ================== BEGIN BASE JS ================== -->
<script src="{{ asset('/public/').'/'.$root }}/assets/plugins/jquery/jquery-3.3.1.min.js"></script>
<script src="{{ asset('/public/').'/'.$root }}/assets/plugins/jquery/jquery-migrate-1.1.0.min.js"></script>
<script src="{{ asset('/public/').'/'.$root }}/assets/plugins/jquery-ui/jquery-ui.min.js"></script>
<script src="{{ asset('/public/').'/'.$root }}/assets/plugins/bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
<!--[if lt IE 9]>
    <script src="{{ asset('/public/').'/'.$root }}/assets/crossbrowserjs/html5shiv.js"></script>
    <script src="{{ asset('/public/').'/'.$root }}/assets/crossbrowserjs/respond.min.js"></script>
    <script src="{{ asset('/public/').'/'.$root }}/assets/crossbrowserjs/excanvas.min.js"></script>
<![endif]-->
<script src="{{ asset('/public/').'/'.$root }}/assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
<script src="{{ asset('/public/').'/'.$root }}/assets/plugins/js-cookie/js.cookie.js"></script>
<script src="{{ asset('/public/').'/'.$root }}/assets/js/theme/apple.min.js"></script>
<script src="{{ asset('/public/').'/'.$root }}/assets/js/apps.min.js"></script>
<!-- ================== END BASE JS ================== -->

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

<script>    
    {!!ajax_header_csrf()!!}   
    $(document).ready(function(){
        App.init();
        FormPlugins.init();        
        {!!ajax_form($AUTH_ID,$transform_ID,$dmha_271,$PARAM_2,$PARAM_3,$id_data)!!} 
        $("form#{{$PARAM_1}}").submit(function(e) {          
            e.preventDefault();               
            var formData = new FormData(this);   
            $.ajax({
                type:'POST',
                enctype: 'multipart/form-data',
                url:"{{ url('/') }}/wwform/postdata",
                data: formData,
                cache: false,
                contentType: false,
                processData: false,
                success:function(data){
                    $("#flash_message").html(data.status);
                    window.location.href = "{{url()->previous()}} ";
                }
            });
        });
    });
</script>