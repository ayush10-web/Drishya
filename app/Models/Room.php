<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;
    protected $fillable = ['room_number','capacity','room_price','floor_number','status'];
    public function images()
    {
        return $this->belongsToMany(Image::class,'image_rooms');
    }
}
