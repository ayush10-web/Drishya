<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\restaurantmenu;
use App\Models\Image;
use App\Models\RestaurantImage;

class RestaurantMenuController extends Controller
{
    public function index()
    {
       $page_name = "Restaurant Menu";
       $restaurantmenus = restaurantmenu::latest()->with('images')->get();
       return view('backend.restaurantmenu.index',compact('page_name','restaurantmenus'));
    }
    public function create()
    {
        {
            $page_name = "Add New Menu";
            return view('backend.restaurantmenu.create',compact('page_name'));
         }
    }

    public function store(Request $request)
    {
       $restaurantmenu = restaurantmenu::create([
           'Name' => $request['restaurant_menu'],
           'price' => $request['menu_price'],
           'description' => $request['description'],
           'status' => $request['status'],
           'category' =>$request['category'],
       ]);

       if ($request->hasFile('images')) {
           $path = "uploads/restaurantmenu/";
           if (!is_dir($path)) {
               mkdir($path, 0777, true);
           }
           foreach ($request->images as $key => $image) {
               $name = $image->getClientOriginalName();
              $pos = strpos($name, ".");
              $ext = substr($name, $pos+1); 
              $imagename = time().rand('0', '100000').$name;
              $img  = $image->move($path,$imagename);
              $imgpath = '/'.$path.$imagename;
              
              $image = Image::create([
               'file_path' => $imgpath,
               'file_name' => $imagename,
               'file_extension' => $ext,
               'status' => 1
               ]);
               RestaurantImage::create([
                   'restaurantmenu_id' => $restaurantmenu->id,
                   'image_id' => $image->id,
                   ]);
           }
       }
       return redirect()->route('restaurantmenu.index');
    }

    public function edit($id)
     {
         $restaurantmenu = restaurantmenu::with('images')->where('id',$id)->first();
         $page_name = "Edit Restaurant Menu";
         return view('backend.restaurantmenu.edit',compact('page_name','restaurantmenu'));
     }

     public function update(Request $request, $id)
     {
        $restaurantmenu = restaurantmenu::find($id);
         
         $restaurantmenu->Name = $request['restaurant_menu'];
         $restaurantmenu->price = $request['menu_price'];
         $restaurantmenu->description = $request['description'];
         $restaurantmenu->status = $request['status'];
         $restaurantmenu->category=$request['category'];

         $restaurantmenu->update();
         if ($request->hasFile('images')) {
            $path = "uploads/room/";
            if (!is_dir($path)) {
                mkdir($path, 0777, true);
            }
            foreach ($request->images as $key => $image) {
                $name = $image->getClientOriginalName();
               $pos = strpos($name, ".");
               $ext = substr($name, $pos+1); 
               $imagename = time().rand('0', '100000').$name;
               $img  = $image->move($path,$imagename);
               $imgpath = '/'.$path.$imagename;
               
               $image = Image::create([
                'file_path' => $imgpath,
                'file_name' => $imagename,
                'file_extension' => $ext,
                'status' => 1
                ]);
                RestaurantImage::create([
                    'restaurantmenu_id' => $restaurantmenu->id,
                    'image_id' => $image->id,
                    ]);
            }
        }
         return redirect()->route('restaurantmenu.index');
     }

     public function delete($id)
     {
        $restaurantmenu = restaurantmenu::with('images')->where('id',$id)->first();
        if (count($restaurantmenu->images) > 0) {
            foreach ($restaurantmenu->images as $value) {
                $image_path = public_path().$value->file_path;
                unlink($image_path);
                $pivot = RestaurantImage::where('image_id',$value->id);
                $pivot->delete();
                $value->delete();
            }
        }
        $restaurantmenu->delete();
        return redirect()->back();
     }

}
