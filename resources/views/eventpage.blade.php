@extends('layouts.app')

@section('content')

<div class="event_card_for_display">
    <div class="event_card_left">
       <img src="http://www.belfastcentre.com/images/custom/uploads/214/images/CNB2017_Poster.jpg" </img>
    </div>

    <div class="event_card_right">
        @guest
            <h1 class="card_title">{{$event->title}}</h1>
            <p><strong> Time: </strong> {{$event->time}} <p>
                <p> <strong>Interest:</strong> {{$event->interest_1}} </p>
                <p> <strong> Second Interest: </strong> {{$event->interest_2}} </p>
        @else
        <h1 class="card_title">{{$event->title}}</h1>
        <p><strong> Time: </strong> {{$event->time}} <p>
            <p> <strong>Interest:</strong> {{$event->interest_1}} </p>
            <p> <strong> Second Interest: </strong> {{$event->interest_2}} </p>

          <a href="{{url('/events/destroy/'.$event->event_id) }}" onclick="event.preventDefault();
                                                          document.getElementById('destroy-form').submit();">{{ __('Delete Event') }}</a>
    <form id="destroy-form" action="{{url('/events/destroy/'.$event->event_id) }}" method="POST" style="display: none;">

    <!-- Handle any CSRF exploits here. -->
                                        @csrf

                                        <!-- Making sure that Laravel knows to delete, since Laravel doesn't support DELETE in forms...-->
                                        @method('DELETE')
                                    </form>
            <a href="{{ url('editevent/edit/'.$event->event_id) }}" onclick="event.preventDefault();
                document.getElementById('edit-form').submit();">{{ __('Edit Event') }}></a>
                <form id="edit-form" action="{{url('/events/destroy/'.$event->event_id) }}" method="POST" style="display: none;">
                     <!-- Handle any CSRF exploits here. -->
                     @csrf

                     <!-- Making sure that Laravel knows to PUT, since Laravel doesn't support PUT in forms...-->
                     @method('PUT')
                 </form>

            @endif
    </div>
    </div>

<div class="box_for_long_event_desc">
    <h2 class="event_desc_title">Event Description</h2>
    <p> {{$event->description_long}}</p>

</div>
@endsection