<?php

namespace App\Http\Controllers;

use App\Models\Slug;
use Illuminate\Http\Request;

class SlugController extends Controller
{
    /**
     * Dispay a listing or resource on front
     */
    public function publicIndex(){

        return view('front.slug.index',[
            'slugs' => Slug::where('status', true)->get()
        ]);

    }
    /**
     * Display single resource item
     */
    public function singleSlug( $uri ){
        $slug = Slug::where('uri', $uri)->firstOrFail();

        return view('front.slug.'.$slug->uri ,[
            'slug' => $slug
        ]);

    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
