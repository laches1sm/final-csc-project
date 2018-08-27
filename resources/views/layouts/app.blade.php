<!DOCTYPE html>
<!-- This blade template will be inherited by all pages. This contains the header as well -->
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Culture Night') }}</title>


    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400, 700" rel="stylesheet">
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="/css/normalize.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">




   
   





</head>
<body>

    <!-- Div with id of app for Vue to attach to. This will be on all pages -->
    <div id="app">
    <!-- Starting header -->
    <header class="section">
        <div class="container">
    
<div class="header-top">

 <h1> Welcome to the Culture Night Website </h1>
 <!-- Differ the header between authenicated users and guests. If user is a guest then display this -->
 @guest 
 

     <a class="nav-link" href="/login">Sign Up/Sign In</a>


    <a class="nav-link" href="/eventslist">Event List</a>

     

<!-- If user is logged in.... -->
@else


    <a class="nav-link" href="/logout" onclick="event.preventDefault();
                                                          document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
    <form id="logout-form" action="/logout" method="POST" style="display: none;">
    <!-- Handle any CSRF exploits here. -->
                                        @csrf
                                    </form>

                                 



                                  
                                    
                                </div>


                           
<!-- Links that will be displayed at the bottom of the header -->
   <nav class="nav-context">

       <a class="nav-link" href="/eventslist">Event List</a>

      
        <a class="nav-link" href="/eventform">Add Event</a>

         

        <!-- End authenication check here -->
                        @endguest
                    
</nav>
            </div>
            <!--End header -->
</header>

       <!-- Any pages that inherit from this header, display their content here. Placeholder -->
            @yield('content')
        
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
</body>

<!--Footer that will appear on each page-->
<footer class="section">
    <div class="container">
   <div class="footer-top">
       <a href="#">Back to Top</a>
</div>
</div>
</footer>
</html>
