<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title> Blah </title>
<link href="https://fonts.googleapis.com/css?family=Open+Sans:400, 700" rel="stylesheet">
<link rel="stylesheet" href="/css/register.css">
<link rel="stylesheet" href="/css/normalize.css">




</head>
<body>
<header class="section">
    <div class="container">
<div class="header-top">

 <h1> Welcome to the Culture Night Website </h1>
 <a href="/login">Sign Out</a>
</div>
    <nav class="nav-context">

    </nav>
</div>
</header>
    


<div class="box2">
<div class="login-box">
<form id="app" @submit="checkForm" action="/login" method="post">

<p v-if="form.errors.length" class="error-block">
    <b>There are error(s) in your submission:</b>
    <ul>
        <li v-for="_e in form.errors">{{ e }}</li>
</ul>
</p>
    <div class="form-group">
        <label class="inputemail" for="inputEmail">Email</label>
        <input type="email" class="form-control" id="inputEmail" placeholder="Email" v-model="email">
</div>
<div class="form-group2">
    <label class="inputusername" for="inputUsername">Username</label>
    <input type="password" class="form-control" id="inputUsername" placeholder="Username" v-model="username">
</div>
<div class="form-group2">
    <label class="inputpass" for="inputPassword">Password</label>
    <input type="password" class="form-control" id="inputPassword" placeholder="Password" v-model="password">
</div>
<div class="form-group3">
    <label class="inputpassconfirm" for="inputPasswordConfirm">Confirm Password</label>
    <input type="password" class="form-control" id="inputPasswordConfirm" placeholder="Password Confirmation" v-model="confirm_password">
</div>

<button type="submit" class="submit-reg-button">Submit</button>
<article>
 <p>Welcome to the Culture Night Website.
     Here, you can make an account to use the website and application.
    
 </p>   
</article>
</div>
</div>

 <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.15.3/axios.js"></script>
    <script src="https://unpkg.com/vue@2.1.6/dist/vue.js"></script>
    <script src="/js/register.js"></script>
</body>

    </html>
    

    

    