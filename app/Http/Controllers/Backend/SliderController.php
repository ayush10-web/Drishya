<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Slider;
use App\Models\Image;
use App\Models\SliderImage;

class SliderController extends Controller
{
    public function index()
    {
       $page_name = "Slider";
       $sliders = Slider::latest()->get();
    //    dd($services);
       return view('backend.slider.index',compact('page_name','sliders'));
    }

    public function create(){
        $page_name = "Add Sliders";
        return view('backend.slider.create',compact('page_name'));
    }

    public function store(Request $request)
     {
        $slider = Slider::create([
            'slider_name' => $request['slider_name'],
            'description' => $request['description'],
            'status' => $request['status']
        ]);

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
                SliderImage::create([
                    'slider_id' => $slider->id,
                    'image_id' => $image->id,
                    ]);
            }
        }
        return redirect()->route('slider.index');
     }
}
