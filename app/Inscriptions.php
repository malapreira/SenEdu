<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inscriptions extends Model
{
    protected $guarded = [];

    public function student(){
        return $this->hasMany("App\student");
    }
    public function academic_Year(){
        return $this->hasMany("App\Academic_Year");
    }
   
}
