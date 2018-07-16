<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>


    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400, 700" rel="stylesheet">
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="/css/normalize.css">


</head>
<body>
    <div id="app">
    <header class="section">
        <div class="container">
    
<div class="header-top">

 <h1> Welcome to the Culture Night Website </h1>
 @guest 
 
     <a class="nav-link" href="/login">Sign Up/Sign In</a>


    <a class="nav-link" href="/eventlist">Event List</a>


@else


    <a class="nav-link" href="/logout" onclick="event.preventDefault();
                                                          document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
    <form id="logout-form" action="/logout" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                           

   <nav class="nav-context">

       <a class="nav-link" href="/eventlist">Event List</a>

      
        <a class="nav-link" href="/eventform">Add Event</a>

        
                        @endguest
                    
</nav>
            </div>
</header>

       
            @yield('content')
        
    </div>
</div>
</body>
</html>
