<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Matter extends Model
{
    protected $guarded = [];

    public function classroom(){
        return $this->belongsToMany("App\Classrooms");
    }

    public function control(){
        return $this->belongsToMany("App\Controls");
    }

    public function course(){
        return $this->hasMany("App\course");
    }

    public function professor(){
        return $this->belongsTo("App\Professors");
    }
}
