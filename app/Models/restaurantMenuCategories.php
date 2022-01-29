<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\restaurantmenu;

class restaurantMenuCategories extends Model
{
    use HasFactory;
    protected $fillable = ['category_name','status'];
    public function menus()
    {
        return $this->hasMany(restaurantmenu::class, 'category_id');
    }
}
