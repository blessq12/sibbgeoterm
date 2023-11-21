<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SlugController extends Controller
{
    public function index(){
        return view('front::slug.index');
    }
}
