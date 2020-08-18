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
<script src="{{ asset('/public/').'/'.$root }}/assets/js/theme/apple.min.js"></script>
<script src="{{ asset('/public/').'/'.$root }}/assets/js/apps.min.js"></script>
<!-- ================== END BASE JS ================== -->

<!-- ================== BEGIN PAGE LEVEL JS ================== -->
<script src="{{ asset('/public/').'/'.$root }}/assets/plugins/highlight/highlight.common.js"></script>
<script src="{{ asset('/public/').'/'.$root }}/assets/js/demo/render.highlight.js"></script>
<!-- ================== END PAGE LEVEL JS ================== -->

<script>
    {!!ajax_header_csrf()!!}
    $(document).ready(function() {
        App.init();
        Highlight.init();
        {!!ajax_form($AUTH_ID,$transform_ID,$dmha_271,$PARAM_2,$PARAM_3,$id_data)!!} 
        
        {!!ajax_submit($id)!!}
             
        $('.autocomplete').on('keyup',function() {
            var autocomplete = $(this).val(); 
            var id = $(this).attr('id');
            $.ajax({            
                url:"{{ url('/') }}/wwdata/autocomplete",        
                type:"GET",            
                data:{'autocomplete':autocomplete,'id':id},            
                success:function (data) {                
                    $('#autocomplete_list_'+id).html(data);
                }
            })
        });

        $(document).on('click', 'li', function(){        
            var value = $(this).text();
            var id = $(this).attr('id');
            $('.autocomplete_' + id).val(value);
            $('.list-group').html("");
        });
    });
</script>