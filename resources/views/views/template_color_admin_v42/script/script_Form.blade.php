
<script src="{{ asset('/public/').'/'.$controller.'/'.$template }}/assets/plugins/jquery/jquery-3.3.1.min.js"></script>
<script src="{{ asset('/public/').'/'.$controller.'/'.$template }}/assets/plugins/jquery/jquery-migrate-1.1.0.min.js"></script>
<script src="{{ asset('/public/').'/'.$controller.'/'.$template }}/assets/plugins/jquery-ui/jquery-ui.min.js"></script>
<script src="{{ asset('/public/').'/'.$controller.'/'.$template }}/assets/plugins/bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
<!--[if lt IE 9]>
    <script src="{{ asset('/public/').'/'.$controller.'/'.$template }}/assets/crossbrowserjs/html5shiv.js"></script>
    <script src="{{ asset('/public/').'/'.$controller.'/'.$template }}/assets/crossbrowserjs/respond.min.js"></script>
    <script src="{{ asset('/public/').'/'.$controller.'/'.$template }}/assets/crossbrowserjs/excanvas.min.js"></script>
<![endif]-->
<script src="{{ asset('/public/').'/'.$controller.'/'.$template }}/assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
<script src="{{ asset('/public/').'/'.$controller.'/'.$template }}/assets/plugins/js-cookie/js.cookie.js"></script>
<script src="{{ asset('/public/').'/'.$controller.'/'.$template }}/assets/js/theme/default.min.js"></script>
<script src="{{ asset('/public/').'/'.$controller.'/'.$template }}/assets/js/apps.min.js"></script>
<!-- ================== END BASE JS ================== -->

<!-- ================== BEGIN PAGE LEVEL JS ================== -->
<script src="{{ asset('/public/').'/'.$controller.'/'.$template }}/assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
<script src="{{ asset('/public/').'/'.$controller.'/'.$template }}/assets/plugins/ionRangeSlider/js/ion-rangeSlider/ion.rangeSlider.min.js"></script>
<script src="{{ asset('/public/').'/'.$controller.'/'.$template }}/assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
<script src="{{ asset('/public/').'/'.$controller.'/'.$template }}/assets/plugins/masked-input/masked-input.min.js"></script>
<script src="{{ asset('/public/').'/'.$controller.'/'.$template }}/assets/plugins/bootstrap-timepicker/js/bootstrap-timepicker.min.js"></script>
<script src="{{ asset('/public/').'/'.$controller.'/'.$template }}/assets/plugins/password-indicator/js/password-indicator.js"></script>
<script src="{{ asset('/public/').'/'.$controller.'/'.$template }}/assets/plugins/bootstrap-combobox/js/bootstrap-combobox.js"></script>
<script src="{{ asset('/public/').'/'.$controller.'/'.$template }}/assets/plugins/bootstrap-select/bootstrap-select.min.js"></script>
<script src="{{ asset('/public/').'/'.$controller.'/'.$template }}/assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.min.js"></script>
<script src="{{ asset('/public/').'/'.$controller.'/'.$template }}/assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput-typeahead.js"></script>
<script src="{{ asset('/public/').'/'.$controller.'/'.$template }}/assets/plugins/jquery-tag-it/js/tag-it.min.js"></script>
<script src="{{ asset('/public/').'/'.$controller.'/'.$template }}/assets/plugins/bootstrap-daterangepicker/moment.js"></script>
<script src="{{ asset('/public/').'/'.$controller.'/'.$template }}/assets/plugins/bootstrap-daterangepicker/daterangepicker.js"></script>
<script src="{{ asset('/public/').'/'.$controller.'/'.$template }}/assets/plugins/select2/dist/js/select2.min.js"></script>
<script src="{{ asset('/public/').'/'.$controller.'/'.$template }}/assets/plugins/bootstrap-eonasdan-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>
<script src="{{ asset('/public/').'/'.$controller.'/'.$template }}/assets/plugins/bootstrap-show-password/bootstrap-show-password.js"></script>
<script src="{{ asset('/public/').'/'.$controller.'/'.$template }}/assets/plugins/bootstrap-colorpalette/js/bootstrap-colorpalette.js"></script>
<script src="{{ asset('/public/').'/'.$controller.'/'.$template }}/assets/plugins/jquery-simplecolorpicker/jquery.simplecolorpicker.js"></script>
<script src="{{ asset('/public/').'/'.$controller.'/'.$template }}/assets/plugins/clipboard/clipboard.min.js"></script>
<script src="{{ asset('/public/').'/'.$controller.'/'.$template }}/assets/js/demo/form-plugins.demo.min.js"></script>
<!-- ================== END PAGE LEVEL JS ================== -->

<script>
    $(document).ready(function() {
        App.init();
        FormPlugins.init();
    });
</script>

<script type="text/javascript">
    {!!ajax_form($AUTH_ID,$dmha_1)!!}
    
   
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
   
   
    $(document).ready(function(){
        $("#submit").click(function(e){
            
   
            e.preventDefault();
            var nama = $("input[name=nama]").val();
            var id = $("input[name=id]").val();
            let _token   = $('meta[name="csrf-token"]').attr('content');
   
            $.ajax({
                type:'POST',
                url:"{{ url('/') }}/wwform/postdata",
                data:{
                    nama:nama,    
                    id:id,                     
                    _token: _token
                    },
                success:function(data){
                    alert(data.success);
                }
            });
        });
    });

</script>