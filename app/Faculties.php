<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Faculties extends Model
{
    public static function show(){
        return static::select('faculties.*')
            ->get();
    }
}
