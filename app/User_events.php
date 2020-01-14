<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User_events extends Model
{
    public $fillable = [ 'name', 'username', 'email', 'address', 'rsvp' ];
}
