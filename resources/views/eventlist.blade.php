@extends('layouts.app')

@section('content')
<section>
    <article class="titlebox">
        <h1>Event List</h1>
        @if (count($events) > 0)
            @foreach($events as $event)
                <div class="row">
                    <div class="col">
                        <a href="/eventpage">{{$event->title}}</a>
                    </div>
                </div>
            @endforeach
            @else
                <p> Sorry, no events yet! Check back later... </p>
            @endif
</article>
</section>
@endsection