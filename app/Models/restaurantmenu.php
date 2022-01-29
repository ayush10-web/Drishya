<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Image;
use App\Models\restaurantMenuCategories;


class restaurantmenu extends Model
{
    use HasFactory;
    protected $fillable = ['Name',
    'price',
    'description',
    'category_id',
    'status'];

    public function images()
    {
        return $this->belongsToMany(Image::class,'restaurant_images');
    }
    public function categories()
    {
        return $this->belongsTo(restaurantMenuCategories::class,'category_id');
    }
}
