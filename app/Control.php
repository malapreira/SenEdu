<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Control extends Model
{
    protected $guarded = [];

    public function highs(){
        return $this->belongsToMany("App\Highs");
    }

    public function matter(){
        return $this->belongsToMany("App\Matters");
    }
}
