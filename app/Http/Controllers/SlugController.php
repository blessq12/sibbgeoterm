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
            'slugs' => Slug::orderBy('priority')->get()
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
        $slug = Slug::findOrFail($request->slugId);
        $fileName = 'slug-' .$slug->uri . '.' . $request->file('image')->getClientOriginalExtension();

        Image::make($request->file('image'))->resize(1080, null, fn ($img) => $img->aspectRatio())->save('assets/uploads/' . $fileName);
        Image::make($request->file('image'))->resize(600, null, fn ($img) => $img->aspectRatio())->save('assets/uploads/' . 'thumb-' . $fileName);
        
        $slug->images()->each(fn ($image) => $image->delete());

        $slug->images()->createMany([
            ['type' => 'original', 'path' => 'assets/uploads/' . $fileName],
            ['type' => 'thumb', 'path' => 'assets/uploads/' . 'thumb-' . $fileName],
        ]);

        return back();

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