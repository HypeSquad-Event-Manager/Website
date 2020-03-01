<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Str;

    function roleCheck() {
        return json_decode(Requests::get("http://127.0.0.1:8000/users/390179632911089666/info", array(), array())->body)->coordinator;
       }
