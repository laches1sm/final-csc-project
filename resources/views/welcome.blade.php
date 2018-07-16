@extends('layouts.app')




@section('content')

<div class="section">
  <div class="container">
<div class="row">
    <div class="col">
        @foreach($events as $event)
   <div class="box"> 
       {{$event}}
    </div>
       @endforeach
</div>

</div>
</div>

@endsection

