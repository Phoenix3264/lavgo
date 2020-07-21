<!-- ================== BEGIN BASE JS ================== -->
<script src="{{ asset('/public/').'/'.$root }}/assets/plugins/jquery/jquery-3.3.1.min.js"></script>
<script src="{{ asset('/public/').'/'.$root }}/assets/plugins/jquery-ui/jquery-ui.min.js"></script>
<script src="{{ asset('/public/').'/'.$root }}/assets/plugins/bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
<!--[if lt IE 9]>
    <script src="{{ asset('/public/').'/'.$root }}/assets/crossbrowserjs/html5shiv.js"></script>
    <script src="{{ asset('/public/').'/'.$root }}/assets/crossbrowserjs/respond.min.js"></script>
    <script src="{{ asset('/public/').'/'.$root }}/assets/crossbrowserjs/excanvas.min.js"></script>
<![endif]-->
<script src="{{ asset('/public/').'/'.$root }}/assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
<script src="{{ asset('/public/').'/'.$root }}/assets/plugins/js-cookie/js.cookie.js"></script>
<script src="{{ asset('/public/').'/'.$root }}/assets/js/theme/material.min.js"></script>
<script src="{{ asset('/public/').'/'.$root }}/assets/js/apps.min.js"></script>
<!-- ================== END BASE JS ================== -->

<!-- ================== BEGIN PAGE LEVEL JS ================== -->
<script src="{{ asset('/public/').'/'.$root }}/assets/plugins/highlight/highlight.common.js"></script>
<script src="{{ asset('/public/').'/'.$root }}/assets/js/demo/render.highlight.js"></script>
<!-- ================== END PAGE LEVEL JS ================== -->
<script>
    $(document).ready(function() {
        App.init();
        Highlight.init();
    });

    
    {!!ajax_form($AUTH_ID,$transform_ID,$dmha_9,$PARAM_2)!!}
    
   
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
   
   
    $(document).ready(function(){
        $("#submit").click(function(e){           
   
            e.preventDefault();   
            $.ajax({
                type:'POST',
                url:"{{ url('/') }}/wwform/postdata",
                data: $('#{{$PARAM_1}}').serialize(),
                success:function(data){
                    window.location.href = "{{ url('/') }}/{{dmha_1_id_check_col($dmha_1,'link')}}";
                }
            });
        });
    });
</script>
