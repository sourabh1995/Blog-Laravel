<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    public static function incomplete()
    {
    	return static::where('iscompleted', 0)->get();
    }
}
