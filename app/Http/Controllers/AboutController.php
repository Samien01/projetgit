<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    //Affiche la page About

    public function about(){
        return view("about");
    }
}
