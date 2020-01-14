<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Events extends Model
{
    public $fillable = [ 'title', 'date', 'lat', 'lon', 'address', 'creator' ];
}
