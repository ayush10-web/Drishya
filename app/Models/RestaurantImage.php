<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RestaurantImage extends Model
{
    use HasFactory;
    protected $fillable = [
        'restaurantmenu_id','image_id',
    ];
    public function restaurantImage()
    {
        return $this->hasOne(Image::class ,'id','image_id');
    }
}
