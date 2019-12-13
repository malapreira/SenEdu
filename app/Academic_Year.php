<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Academic_Year extends Model
{
    protected $guarded = [];

    public function Inscription(){
        return $this->belongsTo("App\inscription");
    }
}
