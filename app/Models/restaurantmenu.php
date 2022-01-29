<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Image;


class restaurantmenu extends Model
{
    use HasFactory;
    protected $fillable = ['Name',
    'price',
    'description',
    'category',
    'status'];

    public function images()
    {
        return $this->belongsToMany(Image::class,'restaurant_images');
    }
}
