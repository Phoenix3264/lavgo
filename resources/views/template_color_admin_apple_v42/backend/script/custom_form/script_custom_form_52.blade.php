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