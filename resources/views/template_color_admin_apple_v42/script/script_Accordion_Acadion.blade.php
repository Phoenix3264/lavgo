<script>
    $(document).ready(function() {
        App.init();

        $.ajax({  
            url: "http://localhost/lavgo2/wwdata/accordion",  
            data: {  "a": "1",  "p": "251",  "t": "2",  "p2": "",  "p3": "",  "di": ""  },  
            dataType: "json",  
            cache: false,  
            success: function(data){  
                $("#accordion").html(data.isi); 
            }
        });
    });
</script>

