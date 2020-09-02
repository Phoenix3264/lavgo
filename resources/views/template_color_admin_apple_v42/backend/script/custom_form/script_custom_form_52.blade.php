<!-- ================== BEGIN PAGE LEVEL JS ================== -->
<script src="{{ asset('/public/').'/'.$root }}/assets/plugins/highlight/highlight.common.js"></script>
<script src="{{ asset('/public/').'/'.$root }}/assets/js/demo/render.highlight.js"></script>
<!-- ================== END PAGE LEVEL JS ================== -->

<script>
    {!!ajax_header_csrf()!!}
    $(document).ready(function() {
        App.init();
    });
</script>