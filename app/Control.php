<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Control extends Model
{
    protected $guarded = [];

    public function inscription(){
        return $this->belongsToMany("App\Inscription");
    }

}
