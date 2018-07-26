@extends('layouts.app')

@section('content')
<section>
    <article>
        <div class="eventbox">
            <h1 class="eventtitle">Event List</h1>
            
               @if (count($events) > 1)
                   @foreach($events as $event)
                   <div class="eventindivbox">
                         <h2 class="eventindivtitle">{{ $event-> title}}</h2>
                         </div>
                         @endforeach

                @else
                   <p> Sorry, no events yet! Check back later... </p>
                   
                   @endif
                   </div>
                   
</article>
              
                   
</section>
@endsection