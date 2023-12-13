<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConstructController extends Controller
{
    public function index(){
        return view('front::construct.index');
    }
    public function angary(){
        return view('front::construct.angary');
    }
    public function sandwich(){
        return view('front::construct.sandwich');
    }
}
