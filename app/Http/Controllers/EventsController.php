<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class EventsController extends Controller
{
    //public function create()
    //{
      //  return view('eventslist', [
            //'events' => Events::all()
        //]);
    //}

    public function store(Events $events)
    {
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

        $events->save();

        //Events::forceCreate([
          //  'title' => request('title'),
           // 'description_short' => request('description_short'),
           // 'description_long' => request('description_long'),
           // 'time' => request('time'),
           // 'interest_1' => request('interest_1'),
           // 'interest_2' => request('interest_2'),
           // 'loc_string' => request('loc_string'),
           // 'lat' => request('lat'),
           // 'long' => request('long'),


            




        //]);

        return ['message' => 'Event Created'];
    }
}
