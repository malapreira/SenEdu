<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class course extends Model
{
    protected $guarded = [];

    public function matter(){
        return $this->hasMany("App\Matter");
    }

    public function professor(){
        return $this->hasMany("App\Professor");
    }

    public function classroom(){
        return $this->hasMany("App\Classroom");
    }
}
