<script type="text/javascript">
 $(function() {
$("button#submit").click(function(){
               $.ajax({
                type: "POST",
                url: "{{url('venues')}}",

                data: $('form.add_venue').serialize(),
                success: function(msg){
                   //$(venue).append(theNewListItem);
                    
                     $("#myModal").modal('hide');  
                     //var response_obj = jQuery.parseJSON(r.responseText);
                    $('#venue').append('<option value="'+(msg.id)+ '"selected="selected">'+(msg.venue_name)+'</option>');
                    $('#kim').html ('Venue Added successfully....');

                 },
            error: function(){
                alert("failure");
                }
                  });
    });
});


</script>