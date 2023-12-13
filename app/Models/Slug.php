<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Image;

class Slug extends Model
{
    use HasFactory;

    public function images(){
        return $this->morphMany(Image::class, 'image');
    }
    public function imagesFull(){
        return $this->morphMany(Image::class, 'image')->where('type', 'original');
    }
    public function imagesThumb(){
        return $this->morphMany(Image::class, 'image')->where('type', 'thumb');
    }

}
