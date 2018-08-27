@extends('layouts.app')

@section('content')
<section>
    <article class="titlebox">
        <h1>Event List</h1>
        @if (count($events) > 0)
            @foreach($events as $event)
                <div class="row">
                    <div class="col">
                                <div class="event_card">
                                        <a href="/eventpage/{{$event->id}}">{{$event->title}}</a>
                                        <span>{{$event->short_desc}}</span>
                                    </div>
                                <div style="background-image: url(http://www.belfastcentre.com/images/custom/uploads/214/images/CNB2017_Poster.jpg);" class="card_img" >
                           
                                </div>
                                
                            </div>
                </div>
            @endforeach
            @else
                <p> Sorry, no events yet! Check back later... </p>
            @endif
</article>
</section>
@endsection