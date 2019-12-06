<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher_type extends Model
{
    protected $guarded = [];

    public function professor(){
        return $this->belongsTo("App\Professors");
    }
}




