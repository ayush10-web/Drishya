<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\ImageEvent;
use App\Models\Image;

class EventController extends Controller
{
    public function index()
     {
        $page_name = "Event";
        $events = Event::latest()->get();
        return view('backend.event.index',compact('page_name','events'));
     }

     public function create()
     {
        $page_name = "Add New Event";
        return view('backend.event.create',compact('page_name'));
     }

     public function store(Request $request)
     {
         $event = Event::create([
            'event_name' => $request['event_name'],
            'start_date' => $request['start_date'],
            'end_date' => $request['end_date'],
            'description' => $request['description'],
            'status' => $request['status']
        ]);

        if ($request->hasFile('images')) {
         $path = "uploads/events/";
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
             ImageEvent::create([
                 'event_id' => $event->id,
                 'image_id' => $image->id,
                 ]);
         }
     }
        return redirect()->route('event.index');
     }

     public function edit($id)
     {
         $event = Event::with('images')->where('id',$id)->first();
         $page_name = "Edit Event Details";
         return view('backend.event.edit',compact('page_name','event'));
     }

     public function update(Request $request, $id)
     {
        $event = Event::find($id);
         $event->event_name = $request['event_name'];
         $event->start_date = $request['start_date'];
         $event->end_date = $request['end_date'];
         $event->description = $request['description'];
         $event->status = $request['status'];
         $event->update();

         if ($request->hasFile('images')) {
            $path = "uploads/events/";
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
                ImageEvent::create([
                    'event_id' => $event->id,
                    'image_id' => $image->id,
                    ]);
            }
         }
         return redirect()->route('event.index');
     }

     public function delete($id)
     {
        $event = Event::find($id);
        $event->delete();
        return redirect()->back();
     }

     public function imageDelete(Request $request)
     {
         $image = Image::find($request->id);
         $pivot = ImageEvent::where('image_id',$request->id);
         $pivot->delete();
         $image_path = public_path().$image->file_path;
         unlink($image_path);
         $image->delete();
        return response()->json($request->id);
     }
}
