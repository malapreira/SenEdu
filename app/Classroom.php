<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Classroom extends Model
{
    protected $guarded = [];

    public function filiere(){
        return $this->hasMany("App\filiere");
    }

    public function level(){
        return $this->hasMany("App\Level");
    }

    public function course(){
        return $this->belongsTo("App\Course");
    }

    public function student(){
        return $this->belongsTo("App\Student");
    }
    
}

