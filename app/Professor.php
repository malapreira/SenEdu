<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Professor extends Model
{
    protected $guarded = [];

    public function matter(){
        return $this->hasMany("App\Matter");
    }

    public function course(){
        return $this->belongsTo("Course");
    }
}
