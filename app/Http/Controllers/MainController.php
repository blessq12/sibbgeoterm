<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function __construct(){}

    public function index(){
        return view('front::index',[
            'company' => Company::first()
        ]);
    }
}
