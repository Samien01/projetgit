<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    //Affficher la page pojet
    public function project(){
        return view("project");
    }
}
