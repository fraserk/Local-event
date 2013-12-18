


<!DOCTYPE html>
<!--[if IE 8]>               <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->

<head>
    <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width" />
  @yield('head')
      {{HTML::style('css/bootstrap.css')}}
      {{HTML::style('css/mystyle.css')}}
      {{HTML::style('css/bootstrap-timepicker.css')}}



  <link href='http://fonts.googleapis.com/css?family=Dosis' rel='stylesheet' type='text/css'>
</head>
<body>
  <section class="header"> 
    <div class="container"> 

      <nav class="navbar navbar-default " role="navigation">
  <!-- Brand and toggle get grouped for better mobile display -->
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="#"> <img src={{asset('img/letsgo.png')}} /></a>
  </div>

  <!-- Collect the nav links, forms, and other content for toggling -->
  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    <ul class="nav navbar-nav pull-right">
      <li class={{setactive('/')}}>{{HTML::linkroute('home','Home')}}</li>
                    <li class="{{setactive('evnts/create')}}">{{HTML::linkroute('evnts.create','Post Event')}}</li>
                   @if(Auth::check())
                    <li class="">{{HTML::linkroute('logout','Log-out')}}</li>
                    <li class="{{setactive('dashboard')}}">{{HTML::linkroute('dashboard','My account')}}</li>
                    
                   @else
                   <li class="{{setactive('user/login')}}">{{HTML::linkroute('login','Login')}}</li>
                   @endif
                    <li class="{{setactive('contact')}}">{{HTML::linkroute('contact','Contact Us')}}</li> 
    </ul>
  </div><!-- /.navbar-collapse -->
</nav>
                
    </div>
  </section>
<section class="article wrapper">
  <div class="container">
                  
                              
                                          @yield('content')
              
           <!-- End of Body -->
  </div>
   <div class="push"><!--//--></div>
</section>

<section class="footer">
  <div class="container">
    <div class="row"> 
      <div class="col-md-4">
         <ul class="nav">
                      <li class="active">{{HTML::linkroute('evnts.index','Home')}}</li>
                      <li class="">{{HTML::linkroute('evnts.create','Post Event')}}</li>
                     @if(Auth::check())
                      <li class="">{{HTML::linkroute('logout','Log-out')}}</li>
                      <li class="">{{HTML::linkroute('dashboard','My account')}}</li>
                     @else
                     <li class="">{{HTML::linkroute('login','Login')}}</li>
                     @endif
                                          
          </ul>
      </div>
    </div>
  </div>
</section>
<script type='text/javascript' src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
  {{HTML::script('js/bootstrap.js')}}  
  {{HTML::script('js/bootstrap-timepicker.js')}}
  {{HTML::script('js/evnt_js.js')}}
  
  {{HTML::script('js/maps.js')}}
 
 <script type="text/javascript">

// $('#venue').append($('<option>', {
//     value: -1,
//     text: 'Create new'
// }));

// </script>

@yield('footer') 


 <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-128168-3', 'getnycevent.com');
  ga('send', 'pageview');

</script>
</body>
</html>
