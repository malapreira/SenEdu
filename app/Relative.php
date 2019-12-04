<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Relative extends Model
{
    
    protected $guarded = [];

    public function highs(){
        return $this->belongsTo("App\Highs");
    }
}
