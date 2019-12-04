<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class high extends Model
{
    protected $guarded = [];

    public function relative(){
        return $this->hasMany("App\Relative");
    }

    public function controls(){
        return $this->belongsToMany("App\Controls");
    }


    public function level(){
        return $this->belongsTo("App\Levels");
    }
        
}
