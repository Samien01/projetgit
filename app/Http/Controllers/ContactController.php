<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class ContactController extends Controller
{
    //Afficher la page contact
    public function contact(){
        return View("contact");
    }
}
