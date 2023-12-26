<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slug;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\File;

class ImageController extends Controller
{
    public function uploadSlugImage(Request $request){

        // create dir if not exist
        if (!is_dir(public_path('assets/uploads/slugs'))){
            mkdir(public_path('assets/uploads/slugs'));
        }

        $slug = Slug::findOrFail($request->slug_id);
        
        if (!$slug->images->isEmpty()){
            foreach ($slug->images as $image) {
                if (File::exists($image->path)){
                    File::delete($image->path);
                }
                $image->delete();
            }
        }
        $imageName = $slug->uri . '.' . $request->file('image')->getClientOriginalExtension();
        // image
        Image::make($request->file('image'))
        ->resize(1920, 1080, fn ($item) => $item->aspectRatio())
        ->save(public_path('assets/uploads/slugs/') . $imageName, 90);
        // thumb
        Image::make($request->file('image'))
        ->resize(512, 512, fn ($item) => $item->aspectRatio())
        ->save(public_path('assets/uploads/slugs/')  . 'thumb-' . $imageName);
        $slug->images()->createMany([
            ['path' => '/assets/uploads/slugs/' . $imageName, 'type' => 'image'],
            ['path' => '/assets/uploads/slugs/' . 'thumb-' . $imageName, 'type' => 'thumb'],
        ]);

        return back()->with('success', 'Фотография загружена');
    }
}
