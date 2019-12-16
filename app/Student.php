<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $guarded = [];

    public function parent(){
        return $this->hasMany("App\Parent");
    }

    public function classroom(){
        return $this->hasMany("App\Classroom");
    }

    public function inscription(){
        return $this->belongsTo("App\Inscriptions");
    }
}
