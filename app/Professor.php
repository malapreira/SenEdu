<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Professor extends Model
{
    protected $guarded = [];

    public function matter(){
        return $this->hasMany("App\Matters");
    }

    public function teacher_type(){
        return $this->hasMany("Teacher_type");
    }
}
