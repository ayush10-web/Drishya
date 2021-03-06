<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImageRoom extends Model
{
    use HasFactory;
    protected $fillable = [
        'room_id','image_id',
    ];
    public function roomImage()
    {
        return $this->hasOne(Image::class ,'id','image_id');
    }
}
