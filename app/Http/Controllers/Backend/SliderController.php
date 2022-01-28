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
       $sliders = Slider::latest()->with('images')->get();   //    dd($services);
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
            'slider_code' => $request['slidercode'],
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

     public function edit($id)
     {
         $slider = Slider::with('images')->where('id',$id)->first();
        //  dd($room);
         $page_name = "Edit Slider Data";
         return view('backend.slider.edit',compact('page_name','slider'));
     }

     public function update(Request $request, $id)
     {
        $slider = Slider::find($id);
         
         $slider->slider_name = $request['slider_name'];
         $slider->description = $request['description'];
         $slider->slider_code = $request['slidercode'];
         $slider->status = $request['status'];
         $slider->update();
         if ($request->hasFile('images')) {
            $path = "uploads/slider/";
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

     public function delete($id)
     {
        $slider = Slider::with('images')->where('id',$id)->first();
        if (count($slider->images) > 0) {
            foreach ($slider->images as $value) {
                $image_path = public_path().$value->file_path;
                unlink($image_path);
                $pivot = SliderImage::where('image_id',$value->id);
                $pivot->delete();
                $value->delete();
            }
        }
        $slider->delete();
        return redirect()->back();
     }

     public function imageDelete(Request $request)
     {
         $image = Image::find($request->id);
         $pivot = SliderImage::where('image_id',$request->id);
         $pivot->delete();
         $image_path = public_path().$image->file_path;
         unlink($image_path);
         $image->delete();
        return response()->json($request->id);
     }
}
