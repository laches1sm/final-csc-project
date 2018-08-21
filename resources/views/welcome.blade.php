@extends('layouts.app')




@section('content')

<div class="section">
  <div class="container">
<div class="row">
        @foreach($events as $event)
       <article class="event_con">
       <a class="links_for_event" href="/eventpage">{{$event->title}}</a>
       <div class="body">{{$event->short_desc}} </div>
       </article>
       @endforeach
    <br>
    </div>
</div>
</div>

@endsection

