


<!DOCTYPE html>
<!--[if IE 8]>               <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->

<head>
    <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width" />
  <title>GOING...</title>

      {{HTML::style('css/bootstrap.css')}}
      {{HTML::style('css/mystyle.css')}}

  <link href='http://fonts.googleapis.com/css?family=Dosis' rel='stylesheet' type='text/css'>
</head>
<body>
  <section class="header"> 
    <div class="container">                           
                <ul class="nav nav-pills pull-right">
                    <li class="active">{{HTML::linkroute('evnts.index','Home')}}</li>
                    <li class="">{{HTML::linkroute('evnts.create','Post Event')}}</li>
                   @if(Auth::check())
                    <li class="">{{HTML::linkroute('logout','Log-out')}}</li>
                    <li class="">{{HTML::linkroute('dashboard','My account')}}</li>
                   @else
                   <li class="">{{HTML::linkroute('login','Login')}}</li>
                   @endif
                                        
                 </ul>
                 <img src={{asset('img/letsgo.gif')}} />
    </div>
  </section>

  <div class="container">
                  
                              @if(Session::has('message'))
                                          {
                                          {{Session::get('message')}}
                                      }
                                      @endif
                                          @yield('content')
              
           <!-- End of Body -->
  </div>
  
<script type='text/javascript' src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
  {{HTML::script('js/bootstrap.js')}}
  {{HTML::script('js/evnt_js.js')}}


 <script type="text/javascript">

// $('#venue').append($('<option>', {
//     value: -1,
//     text: 'Create new'
// }));

// </script>



<script type="text/javascript">
 $(function() {
$("button#submit").click(function(){
               $.ajax({
                type: "POST",
                url: "http://localhost/nygoing/public/venues",
                
                data: $('form.add_venue').serialize(),
                success: function(msg){
                   //$(venue).append(theNewListItem);
                    
                     $("#myModal").modal('hide');  
                     //var response_obj = jQuery.parseJSON(r.responseText);
                    $('#venue').append('<option value="'+(msg.id)+ '"selected="selected">'+(msg.venue_name)+'</option>');
                    $('#kim').html ('Venue Added');

                 },
            error: function(){
                alert("failure");
                }
                  });
    });
});


</script>
  
</body>
</html>
