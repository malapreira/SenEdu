<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $guarded = [];

    public function employees(){
        return $this->belongsTo("App\Employees");
    }
}
