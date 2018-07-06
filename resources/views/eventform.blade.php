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
    <form method="POST" action="/events" @submit.prevent="onSubmit" @keydown="form.errors.clear($event.target.name)">
        <div class="form-group">

            <label class="inputeventname" for="inputEventName">Title of Event</label>


            <input type="text" name="title" class="form-control" id="inputEventName" placeholder="Event Name" v-model="form.title">

            <scan class="help is-danger" v-if="form.errors.has('form.title')" v-text="errors.get('form.title')"></scan>
                    
    </div>
    <div class="form-group">

            <label class="inputdesclong" for="inputEventDescLong">Long description</label>

            <textarea name="description_long" class="inputEventDescLong" rows="10" cols="60" v-model="form.description_long" placeholder="Enter a long description for your event here..."></textarea>

            <scan class="help is-danger" v-if="form.errors.has('form.description_long')" v-text="errors.get('form.description_long')"></scan>
    </div>
    <div class="form-group">

            <label class="inputshortdesc" for="inputEventDescShort">Short description</label>

            <textarea name="description_short" class="inputEventDescShort" rows="10" cols="60" v-model="form.description_short" placeholder="Enter a short description for your event here..."></textarea>

            <scan class="help is-danger" v-if="form.errors.has('form.description_short')" v-text="errors.get('form.description_short')"></scan>

    </div>

    <div class="form-group">

            <label class="inputfirstinterest" for="inputEventInterest1">First interest</label>


            <input type="text" name="interest1" class="form-control" id="inputEventInterest1" placeholder="First Interest" v-model="form.interest_1" >

            <scan class="help is-danger" v-if="form.errors.has('form.interest_1')" v-text="errors.get('form.interest_1')"></scan>
    </div>


    <div class="form-group">

            <label class="inputsecondinterest" for="inputEventInterest2">Second interest</label>


            <input type="text" name="interest2" class="form-control" id="inputEventInterest2" placeholder="Second Interest" v-model="form.interest_2">
            <scan class="help is-danger" v-if="form.errors.has('form.interest_2')" v-text="errors.get('form.interest_2')"></scan>
    </div>
    <div class="form-group">

            <label class="inputtime" for="inputEventTime">Time</label>


            <input type="time" name="time" class="form-control" id="inputEventTime" placeholder="Time" v-model="form.time">
            <scan class="help is-danger" v-if="form.errors.has('form.time')" v-text="errors.get('form.time')"></scan>
    </div>

    <div class="form-group">

            <label class="inputlocstring" for="inputEventLocString">Locaction Name</label>

            <input type="text" name="loc_string" class="form-control" id="inputEventLocString" placeholder="Location" v-model="form.loc_string">

            <scan class="help is-danger" v-if="form.errors.has('form.loc_string')" v-text="errors.get('form.loc_string')"></scan>
    </div>


    <div class="form-group">

            <label class="inputlat" for="inputEventLat">Latitude</label>


            <input type="number" name="lat" class="form-control" id="inputEventLat"  placeholder="Latitude" v-model="form.lat"  >
            <scan class="help is-danger" v-if="form.errors.has('form.lat')" v-text="errors.get('form.lat')"></scan>
    </div>


    <div class="form-group">

            <label class="inputlong" for="inputEventLong">Longitude</label>


            <input type="number" name="long" class="form-control" id="inputEventLong" placeholder="Longitude" v-model="form.long">
            <scan class="help is-danger" v-if="form.errors.has('form.long')" v-text="errors.get('form.long')"></scan>
    </div>




    <button type="submit" class="submit-event-form-btn" :disabled="errors.any()">Submit</button>
  
</div>
</div>
    </article>
</section>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.15.3/axios.js"></script>
    <script src="https://unpkg.com/vue@2.1.6/dist/vue.js"></script>
    <script src="/js/app.js"></script>

</body>

</html>
