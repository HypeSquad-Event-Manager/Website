<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User_events extends Model
{
    public $fillable = [ 'title', 'date', 'lat', 'lon', 'address', 'rsvp' ];
}
