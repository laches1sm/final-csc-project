<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Events;


class EventsController extends Controller
{
    public function create()
    {
        $events = Events::all();

        return view('eventlist', compact('events'));
    }

    public function store(Events $events)
    {
        //sends request to db to create a new event
        // fields are set as required - if not in will fail validation
        $this->validate(request(),[
            'title' => 'required',
            'description_short' => 'required',
            'description_long' => 'required',
            'time' => 'required',
            'interest_1' => 'required',
            'interest_2' => 'required',
            'loc_string' => 'required',
            'lat' => 'required',
            'long' => 'required'
        ]);

        $events->title = request('title');
        $events->description_short = request('description_short');
        $events->description_long = request('description_long');
        $events->time = request('time');
        $events->interest_1 = request('interest_1');
        $events->interest_2 = request('interest_2');
        $events->loc_string = request('loc_string');
        $events->lat = request('lat');
        $events->long=request('long');
        //save the event
        $events->save();



        return ['message' => 'Event Created'];
    }

    public function show(Events $events)
    {
        
        //return view with all events
        return view('eventlist', compact($events));
    }

    public function getEvent($event_id)
    {
        //find the particular event via its id
       $event = Events::find($event_id);
       // return the view with that event
       return view('eventpage')->withEvent($event);

      
    }
}
