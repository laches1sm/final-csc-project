<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Events extends Model
{
    protected $table = 'events';
    protected $fillable = ['title', 'description_long', 'description_short', 'interest_1', 'interest_2', 'time', 'loc_string', 'lat', 'long'];
}
