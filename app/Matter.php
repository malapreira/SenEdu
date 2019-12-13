<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Matter extends Model
{
    protected $guarded = [];

    public function course(){
        return $this->belongsTo("App\course");
    }

    public function professor(){
        return $this->belongsTo("App\Professor");
    }
}
