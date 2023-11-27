<?php

namespace App\Http\Controllers;

use App\Models\Slug;
use Illuminate\Http\Request;

class SlugController extends Controller
{
    public function index(){
        return view('front::slug.index',[
            'slugs' => Slug::where('status', true)->get()
        ]);
    }
}
