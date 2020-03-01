<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User_events extends Model
{

    protected $table = 'user_bios';

    public $fillable = [ 'name', 'username', 'email', 'address', 'rsvp' ];
}
