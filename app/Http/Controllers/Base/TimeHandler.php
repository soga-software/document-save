<?php

namespace App\Http\Controllers\Base;

class TimeHandler
{
    public static function utcInt()
    {
        return time();
    }
}