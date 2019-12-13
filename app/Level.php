<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Level extends Model
{
    protected $guarded = [];

    public function classroom(){
        return $this->belongsTo("App\Classroom");
    }
}
