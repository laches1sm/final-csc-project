<!doctype html>
<html>
    <head>
    <meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title> Blah </title>
<link href="https://fonts.googleapis.com/css?family=Open+Sans:400, 700" rel="stylesheet">
<link rel="stylesheet" href="/css/app.css">
<link rel="stylesheet" href="/css/normalize.css">


</head>
<body>
<header>
    <div class="header-top">

    <h1> Admin Login </h1>
    </div>
</header>
<div id="app" class="box2">
<div class="login-box">
<form action="/menu" >
    <div class="form-group">
        <label class="inputemail" for="inputEmail">Email</label>
        <input type="email" class="form-control" id="inputEmail" placeholder="Email" v-model="email">
</div>
<div class="form-group2">
    <label class="inputpass" for="inputPassword">Password</label>
    <input type="password" class="form-control" id="inputPassword" placeholder="Password">
</div>
<div class="checkbox">
    <label>
        <input type="checkbox">Remember Me 
</label>
<a href='/register'>No account? Register!</a>
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
        <article>
            <p>Welcome to the Culture Night Website.
                Here, you can log in to add events.
                    </p>   
        </article>
    </div>
</div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.15.3/axios.js"></script>
    <script src="https://unpkg.com/vue@2.1.6/dist/vue.js"></script>
    <script src="/js/app.js"></script>

</body>

    </html>