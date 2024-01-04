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
            File::delete($slug->images()->where('type', 'image')->first()->path);
            File::delete($slug->images()->where('type', 'thumb')->first()->path);
        }
            

        $slug->images()->where('type', 'image')->delete();
        $slug->images()->where('type', 'thumb')->delete();


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

    public function slugPortfolio(Request $request, string $id){
        $slug = Slug::findOrFail($id);
        $dir = public_path('/assets/uploads/portfolio/');
        if (!is_dir($dir)){
            mkdir($dir);
        }

        foreach ($request->file('images') as $img) {
            $imageName = time() .'-'. rand(0, 2000) .'.'. $img->getClientOriginalExtension();
            Image::make($img)->resize(1024,1024, fn($item)=>$item->aspectRatio())->save($dir . $imageName, 90);
            $slug->portfolioImages()->create([
                'path' => '/assets/uploads/portfolio/' . $imageName,
                'type' => 'portfolio'
            ]);
        }
        return back()->with('success', 'Изображение загружено');
    }

    public function deletePortfolioImage(string $slugId, string $imageId){
        return 'slug: ' . $slugId . 'imageId: ' .$imageId;
    }
}
