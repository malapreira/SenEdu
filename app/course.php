<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class course extends Model
{
    protected $guarded = [];

    public function matter(){
        return $this->belongsTo("App\Matters");
    }
}
