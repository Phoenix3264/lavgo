<script src="{{ asset('/public/').'/'.$controller.'/'.$template }}/assets/plugins/pace/pace.min.js"></script>

<script>
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

</script>