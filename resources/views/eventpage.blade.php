@extends('layouts.app')

@section('content')

<div class="event_card">
    <div class="event_card_left">
       <img src="http://www.belfastcentre.com/images/custom/uploads/214/images/CNB2017_Poster.jpg" </img>
    </div>

    <div class="event_card_right">
            <h1 class="event_title_card">{{$event->title}}</h1>
            <p> {{ $event->long_desc}} </p>
            <p><strong> Time: </strong> {{$event->time}} <p>
                <p> <strong>Interest:</strong> {{$event->interest1}} </p>
                <p> <strong> Second Interest: </strong> {{$event->interest2}} </p>
    </div>
    </div>
@endsection