<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Events extends Model
{
    protected $table = 'events';
    protected $fillable = ['title', 'description_long', 'description_short', 'interest_1', 'interest_2', 'time', 'loc_string', 'lat', 'long'];
    
    public function assign_owner()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function assign_filter()
    {
        return $this->belongsTo(Filter::class);

    }

    public function repiles()
    {
        return $this->hasMany(Comments::class);
    }
    public function add_comment($comment)
    {
        $this->repiles()->create($reply);
    }
    

}
