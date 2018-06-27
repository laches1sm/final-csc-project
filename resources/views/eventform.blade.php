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
        <h1> Welcome to the Culture Night Website </h1>
        <a href="/login">Sign Out</a>
    </div>
    <nav class="nav-context">

    </nav>
</header>

<section>
    <article>
    <div class="event-form-box" id="app">
            <h1 class="eventtitle">Add a New Event</h1>
    <form method="POST" action="/events" @submit.prevent="onSubmit">
        <div class="form-group">

            <label class="inputeventname" for="inputEventName">Title of Event</label>


            <input type="text" name="title" class="form-control" id="inputEventName" placeholder="Event Name" v-model="title">
    </div>
    <div class="form-group">

            <label class="inputdesclong" for="inputEventDescLong">Long description</label>

            <textarea name="description_long" class="inputEventDescLong" rows="10" cols="60" v-model="description_long" placeholder="Enter a long description for your event here..."></textarea>

    </div>
    <div class="form-group">

            <label class="inputshortdesc" for="inputEventDescShort">Short description</label>
            <textarea name="description_short" class="inputEventDescShort" rows="10" cols="60" v-model="description_short" placeholder="Enter a short description for your event here..."></textarea>


    </div>

    <div class="form-group">

            <label class="inputfirstinterest" for="inputEventInterest1">First interest</label>


            <input type="text" name="interest1" class="form-control" id="inputEventInterest1" placeholder="First Interest" v-model="interest_1">
    </div>


    <div class="form-group">

            <label class="inputsecondinterest" for="inputEventInterest2">Second interest</label>


            <input type="text" name="interest2" class="form-control" id="inputEventInterest2" placeholder="Second Interest" v-model="interest_2">
    </div>
    <div class="form-group">

            <label class="inputtime" for="inputEventTime">Time</label>


            <input type="time" name="time" class="form-control" id="inputEventTime" placeholder="Time" v-model="time">
    </div>

    <div class="form-group">

            <label class="inputlocstring" for="inputEventLocString">Locaction Name</label>


            <input type="text" name="loc_string" class="form-control" id="inputEventLocString" placeholder="Location" v-model="loc_string">
    </div>


    <div class="form-group">

            <label class="inputlat" for="inputEventLat">Latitude</label>


            <input type="number" name="lat" class="form-control" id="inputEventLat"  placeholder="Latitude" v-model="lat">
    </div>


    <div class="form-group">

            <label class="inputlong" for="inputEventLong">Longitude</label>


            <input type="number" name="long" class="form-control" id="inputEventLong" placeholder="Longitude" v-model="long">
    </div>




    <button type="submit" class="submit-event-form-btn">Submit</button>
  
</div>
</div>
    </article>
</section>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.15.3/axios.js"></script>
    <script src="https://unpkg.com/vue@2.1.6/dist/vue.js"></script>
    <script src="/js/app.js"></script>

</body>

</html>
