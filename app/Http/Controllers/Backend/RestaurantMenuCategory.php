<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\restaurantmenuCategories;

class RestaurantMenuCategory extends Controller
{
    public function storeCategory(Request $request)
    {
       restaurantmenuCategories::create([
           'category_name' => $request['category_name'],
           'status' => $request['status']
       ]);
       return redirect()->route('restaurantmenucategory.index');
    }
    public function createCategory()
    {
        {
            $page_name = "Add New Menu Category";
            return view('backend.restaurantMenuCategory.createCategory',compact('page_name'));
         }
    }
    public function index()
    {
       $page_name = "Restaurant Menu Category";
       $restaurantMenuCategories = restaurantmenuCategories::latest()->get();
       return view('backend.restaurantMenuCategory.index',compact('page_name','restaurantMenuCategories'));
    }
    public function edit($id)
     {
         $restaurantMenuCategories = restaurantMenuCategories::latest()->where('id',$id)->first();
         $page_name = "Edit Restaurant Menu Category";
         return view('backend.restaurantMenuCategory.edit',compact('page_name','restaurantMenuCategories'));
     }

     public function update(Request $request, $id)
     {
        $restaurantMenuCategories = restaurantMenuCategories::find($id);
         
         $restaurantMenuCategories->category_name = $request['category_name'];
         $restaurantMenuCategories->status = $request['status'];

         $restaurantMenuCategories->update();
        
         return redirect()->route('restaurantmenucategory.index');
     }

     public function delete($id)
     {
        $restaurantMenuCategories = restaurantMenuCategories::latest()->where('id',$id)->first();
        $restaurantMenuCategories->delete();
        return redirect()->back();
     }
}
