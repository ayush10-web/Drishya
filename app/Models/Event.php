<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Image;

class Event extends Model
{
    use HasFactory;
    protected $fillable = ['event_name',
    'start_date',
    'end_date',
    'status',
    'description'];
    public function images()
    {
        return $this->belongsToMany(Image::class,'image_events');
    }
}
