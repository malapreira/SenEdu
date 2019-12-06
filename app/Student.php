<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $guarded = [];

    public function parent(){
        return $this->hasMany("App\Parent");
    }

    public function controls(){
        return $this->belongsToMany("App\Controls");
    }


    public function level(){
        return $this->belongsTo("App\Levels");
    }
}
