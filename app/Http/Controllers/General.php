<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class General extends Controller
{
    //
    public function index(){
        return view('general.inicio');
    }
    public function nosotros(){
        return view('general.nosotros');
    }
    public function contactos(){
        return view('general.contactos');
    }
}
