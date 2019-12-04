<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Filiere extends Model
{
    protected $guarded = [];

    public function level(){
        return $this->belongsToMany("App\Levels");
    }

    public function classroom(){
        return $this->belongsTo("App\Classrooms");
    }
}
