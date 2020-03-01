<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User_Bios extends Model
{
    public $table = "user_bios";

    public $fillable = [ 'userid', 'username', 'discrim', 'avatar', 'sexuality', 'dob', 'description', 'gender', 'status', 'email', 'occupation' ];
}
