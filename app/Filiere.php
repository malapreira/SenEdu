<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Filiere extends Model
{
    protected $guarded = [];

    public function classroom(){
        return $this->belongsTo("App\Classroom");
    }
}
