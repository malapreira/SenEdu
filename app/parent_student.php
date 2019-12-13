<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class parent_student extends Model
{
    protected $guarded = [];

    public function student(){
        return $this->belongsTo("App\Student");
    }
}
