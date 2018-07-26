<!-- This page is for letting the user insert events into the system.-->
<!-- Inherit from app.blade template. Includes header -->
@extends('layouts.app')

<!-- Overwrite what is in the content section in app.blade with this-->
@section('content')
<section>
    <article>
    <!-- Setting up the box that will contain the form and Vue -->
    <div class="event-form-box" id="app">
            <h1 class="eventtitle">Add a New Event</h1>
            <!-- Setting up a form that will POST the event that the user submits -->
            <!-- Also some Vue - if there is any errors in the form the submit button will be disabled -->
    <form method="POST" action="/events" @submit.prevent="onSubmit" @keydown="form.errors.clear($event.target.name)">
    @csrf <!---CSRF protection -->
        <div class="form-group-eventfirst">

            <label class="inputeventname" for="inputEventName">Title of Event</label>


            <input type="text" name="title" class="form-control1" id="inputEventName" placeholder="Event Name" v-model="form.title">

            <scan class="help is-danger" v-if="form.errors.has('form.title')" v-text="errors.get('form.title')"></scan>
                    
    </div>
    <div class="form-group-eventform">

            <label class="inputdesclong" for="inputEventDescLong">Long description</label>

            <textarea name="description_long" class="inputEventDescLong" rows="10" cols="60" v-model="form.description_long" placeholder="Enter a long description for your event here..."></textarea>

            <scan class="help is-danger" v-if="form.errors.has('form.description_long')" v-text="errors.get('form.description_long')"></scan>
    </div>
    <div class="form-group-eventform">

            <label class="inputshortdesc" for="inputEventDescShort">Short description</label>

            <textarea name="description_short" class="inputEventDescShort" rows="10" cols="60" v-model="form.description_short" placeholder="Enter a short description for your event here..."></textarea>

            <scan class="help is-danger" v-if="form.errors.has('form.description_short')" v-text="errors.get('form.description_short')"></scan>

    </div>

    <div class="form-group-eventform">

            <label class="inputfirstinterest" for="inputEventInterest1">First interest</label>


            <input type="text" name="interest1" class="form-control" id="inputEventInterest1" placeholder="First Interest" v-model="form.interest_1" >

            <scan class="help is-danger" v-if="form.errors.has('form.interest_1')" v-text="errors.get('form.interest_1')"></scan>
    </div>


    <div class="form-group-eventform">

            <label class="inputsecondinterest" for="inputEventInterest2">Second interest</label>


            <input type="text" name="interest2" class="form-control" id="inputEventInterest2" placeholder="Second Interest" v-model="form.interest_2">
            <scan class="help is-danger" v-if="form.errors.has('form.interest_2')" v-text="errors.get('form.interest_2')"></scan>
    </div>
    <div class="form-group-eventform">

            <label class="inputtime" for="inputEventTime">Time</label>


            <input type="time" name="time" class="form-control" id="inputEventTime" placeholder="Time" v-model="form.time">
            <scan class="help is-danger" v-if="form.errors.has('form.time')" v-text="errors.get('form.time')"></scan>
    </div>

    <div class="form-group-eventform">

            <label class="inputlocstring" for="inputEventLocString">Locaction Name</label>

            <input type="text" name="loc_string" class="form-control" id="inputEventLocString" placeholder="Location" v-model="form.loc_string">

            <scan class="help is-danger" v-if="form.errors.has('form.loc_string')" v-text="errors.get('form.loc_string')"></scan>
    </div>


    <div class="form-group-eventform">

            <label class="inputlat" for="inputEventLat">Latitude</label>


            <input type="number" name="lat" class="form-control" id="inputEventLat"  placeholder="Latitude" v-model="form.lat"  >
            <scan class="help is-danger" v-if="form.errors.has('form.lat')" v-text="errors.get('form.lat')"></scan>
    </div>


    <div class="form-group-eventform">

            <label class="inputlong" for="inputEventLong">Longitude</label>


            <input type="number" name="long" class="form-control" id="inputEventLong" placeholder="Longitude" v-model="form.long">
            <scan class="help is-danger" v-if="form.errors.has('form.long')" v-text="errors.get('form.long')"></scan>
    </div>




    <button type="submit" class="submit-event-form-btn" :disabled="errors.any()">Submit</button>
  
</div>
</div>
    </article>
</section>

@endsection <!-- End overwrite -->