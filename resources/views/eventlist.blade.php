@extends('layouts.app')

@section('content')
<section>
        <div class="page_title">
                <h1>Event List</h1>
                </div>
    <article class="titlebox">
        
        @if (count($events) > 0)
            @foreach($events as $event)
        
                    <div class="event_card_row">
                                <div class="event_card">
                                        <a href="{{ url('eventpage/'.$event->event_id) }}">{{$event->title}}</a>
                                        <span>{{$event->description_short}}</span>
                                        <div class="website_links">
                                        <i class="fas fa-globe"></i>
                                        {{$event->loc_string}}
                                        <i class="fas fa-heart"></i>
                                        {{$event->interest_1}}
                                        <i class="fas fa-heart"></i>
                                        {{$event->interest_2}}
                                        <i class="fas fa-clock"></i>
                                        {{$event->time}}


                                        </div>
                                      
                                        
                                    </div>
                                <div style="background-image: url('culturenight/storage/app/public/CNB2017.jpg');" class="card_img" >
                           
                                </div>

                               
                                       
                                
                                
                            
                </div>
            @endforeach
            @else
                <p> Sorry, no events yet! Check back later... </p>
            @endif
</article>
</section>
@endsection