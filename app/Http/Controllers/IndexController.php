<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    //Afficher la page d"accueii

    public function index(){
        return view("index");
    }
}
