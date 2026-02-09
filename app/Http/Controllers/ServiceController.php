<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    //Afficher la page service
    public function service(){
        return view("service");
    }
}
