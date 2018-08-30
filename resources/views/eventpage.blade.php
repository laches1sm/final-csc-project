@extends('layouts.app')

@section('content')

<div class="event_card_for_display">
    <div class="event_card_left">
       <img src="http://www.belfastcentre.com/images/custom/uploads/214/images/CNB2017_Poster.jpg" </img>
    </div>

    <div class="event_card_right">
            <h1 class="card_title">{{$event->title}}</h1>
            <p><strong> Time: </strong> {{$event->time}} <p>
                <p> <strong>Interest:</strong> {{$event->interest_1}} </p>
                <p> <strong> Second Interest: </strong> {{$event->interest_2}} </p>
    </div>
    </div>

<div class="box_for_long_event_desc">
    <h2 class="event_desc_title">Event Description</h2>
    <p> {{$event->description_long}}</p>

</div>
@endsection