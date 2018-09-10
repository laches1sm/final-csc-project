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

    public function store(Request $request)
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

        $events = Events::create([
            'title' => $request->title,
            'description_short'=> $request->description_short,
            'description_long'=> $request->description_long,
            'time'=>$request->time,
            'interest_1'=>$request->interest_1,
            'interest_2'=> $request->interest_2,
            'loc_string'=>$request->loc_string,
            'lat'=>$request->lat,
            'long'=>$request->long,


        ]);

        $events->save();


/** 
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

*/

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

    public function destory($id)
    {
        //deletes a particular event
        $event = Events::find($id);
        $event->delete();

        //will redirect users back to the event list pg
        return redirect('/eventlist')->with('success', 'Item has been deleted');

    }

    public function update(Request $request, $id)
    {

        $events = Events::find($id);
        
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

       
            $events->title = $request->title;
            
            $events->description_short = $request->description_short;
            $events->description_long = $request->description_long;
            $events->time = $request->time;
            $events->interest_1 = $request->interest_1;
            $events->interest_2 = $request->interest_2;
            $events->loc_string = $request->loc_string;
            $events->loc_string = $request->lat;
            $events->long = $request->long;


        

        $events->save();


        return redirect('/eventlist');



    }
}
