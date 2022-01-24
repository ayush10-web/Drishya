<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Image;

class Service extends Model
{
    use HasFactory;
    protected $fillable = ['service_name','description','media_id','status'];

    public function image()
    {
        return $this->belongsTo(image::class,'media_id');
    }

}
