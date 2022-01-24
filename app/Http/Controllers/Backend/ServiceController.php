<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Image;
use App\Models\Service;

class ServiceController extends Controller
{
    public function index()
    {
       $page_name = "Service";
       $services = Service::latest()->with('image')->get();
    //    dd($services);
       return view('backend.service.index',compact('page_name','services'));
    }

    public function create()
    {
        $page_name = "Add Services";
        return view('backend.service.create',compact('page_name'));
    }

    public function store(Request $request)
    {
        $imageid=null;
       if ($request->hasFile('image')) {
        $path = "uploads/service/";
        if (!is_dir($path)) {
            mkdir($path, 0777, true);
        }
      
            $name = $request->image->getClientOriginalName();
           $pos = strpos($name, ".");
           $ext = substr($name, $pos+1); 
           $imagename = time().rand('0', '100000').$name;
           $img  = $request->image->move($path,$imagename);
           $imgpath = '/'.$path.$imagename;
           
           $image = Image::create([
            'file_path' => $imgpath,
            'file_name' => $imagename,
            'file_extension' => $ext,
            'status' => 1
            ]);
            $imageid = $image->id;
    }
        $service = Service::create([
            'service_name' => $request['service_name'],
            'description' => $request['description'],
            'status' => $request['status'],
            'media_id' => $imageid,
        ]);

        return redirect()->route('service.index');
    }


    public function edit($id){
        $service = Service::with('image')->where('id',$id)->first();
        //  dd($service);
         $page_name = "Edit Service";
         return view('backend.service.edit',compact('page_name','service'));
    }

    public function update(Request $request,$id)
    {
        $service = Service::with('image')->where('id',$id)->first();

        $service->service_name = $request['service_name'];
        $service->description = $request['description'];
        $service->status = $request['status'];

        if ($request->hasFile('image')) {
            $path = "uploads/service/";
            if (!is_dir($path)) {
                mkdir($path, 0777, true);
            }
          
                $name = $request->image->getClientOriginalName();
               $pos = strpos($name, ".");
               $ext = substr($name, $pos+1); 
               $imagename = time().rand('0', '100000').$name;
               $img  = $request->image->move($path,$imagename);
               $imgpath = '/'.$path.$imagename;
               
               $image = Image::create([
                'file_path' => $imgpath,
                'file_name' => $imagename,
                'file_extension' => $ext,
                'status' => 1
                ]);

        $service->media_id = $image->id;
        }

        $service->update();
        return redirect()->route('service.index');
    }

    public function delete($id)
    {
        $service= Service::find($id);
        if ($service->media_id != null){
                $image = Image::find($service->media_id);
                $image_path = public_path().$image->file_path;
                unlink($image_path);
                $image->delete();
        }
        $service->delete();
        return redirect()->back();
    }
}
