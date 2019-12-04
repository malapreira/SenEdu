<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Classroom extends Model
{
    protected $guarded = [];

    public function filiere(){
        return $this->hasMany("App\filieres");
    }

    public function matter(){
        return $this->belongsToMany("App\Matters");
    }
    
}

