<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ElevesController extends Controller
{
    public function index(){
        return "Je suis un eleve de l'ecole";
    }

    public function show($id){
        return "Je suis en classe";
    }
}
