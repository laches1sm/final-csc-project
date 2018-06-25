<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Events extends Controller
{
    public function create()
    {
        return view('events.create', [
            'events' => Events::all()
        ]);
    }

    public function store()
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

        Events::forceCreate([
            'title' => request('title'),
            'description_short' => request('description_short'),
            'description_long' => request('description_long'),
            'time' => request('time'),
            'interest_1' => request('interest_1'),
            'interest_2' => request('interest_2'),
            'loc_string' => request('loc_string'),
            'lat' => request('lat'),
            'long' => request('long'),


            




        ]);

        return ['message' => 'Event Created'];
    }
}
