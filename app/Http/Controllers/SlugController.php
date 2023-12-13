<?php

namespace App\Http\Controllers;

use App\Models\Slug;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class SlugController extends Controller
{
    protected $manager;

    public function __construct(){
        
    }
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
        return view('crm.slugs.index',[
            'slugs' => Slug::all()
        ]);
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
        $slug = Slug::findOrFail($id);
        return view('crm.slugs.show',[
            'slug' => $slug
        ]);
    }
    /**
     * upload and resize image of specified resource
     */
    public function uploadImage(Request $request){

        $name = 'thumb-' . $request->file('image')->getFilename() . '.' . $request->file('image')->getClientOriginalExtension() ;
        $request->file('image')->storeAs('public/assets/uploads', $name);

        Image::make('assets/uploads/'. $name)->resize(720, null, function($file){
            $file->aspectRatio();
        })->save('assets/uploads/' .$name, 60);
        
        return back()->with('image', '/assets/uploads/' .$name);
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