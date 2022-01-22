<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Image;
use App\Models\ImageRoom;
use App\Models\Room;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Request as FacadesRequest;

class RoomController extends Controller
{
     public function index()
     {
        $page_name = "Room";
        $rooms = Room::latest()->with('images')->get();
        // dd($rooms);
        return view('backend.room.index',compact('page_name','rooms'));
     }

     public function create()
     {
        $page_name = "Add New Room";
        return view('backend.room.create',compact('page_name'));
     }
     public function store(Request $request)
     {
        $room = Room::create([
            'room_number' => $request['room_no'],
            'capacity' => $request['room_capacity'],
            'room_price' => $request['room_price'],
            'floor_number' => $request['floor_num'],
            'status' => $request['status']
        ]);

        if ($request->hasFile('images')) {
            $path = "/uploads/room/";
            if (!is_dir($path)) {
                mkdir($path, 0777, true);
            }
            foreach ($request->images as $key => $image) {
                $name = $image->getClientOriginalName();
               $pos = strpos($name, ".");
               $ext = substr($name, $pos+1); 
               $imagename = time().rand('0', '100000').$name;
               $img  = $image->move($path,$imagename);
               $imgpath = $path.$imagename;
               
               $image = Image::create([
                'file_path' => $imgpath,
                'file_name' => $imagename,
                'file_extension' => $ext,
                'status' => 1
                ]);
                ImageRoom::create([
                    'room_id' => $room->id,
                    'image_id' => $image->id,
                    ]);
            }
        }
        return redirect()->route('room.index');
     }
     public function edit($id)
     {
         $room = Room::with('images')->where('id',$id)->first();
        //  dd($room);
         $page_name = "Edit Room Data";
         return view('backend.room.edit',compact('page_name','room'));
     }
     public function update(Request $request, $id)
     {
        $room = Room::find($id);
         
         $room->room_number = $request['room_no'];
         $room->capacity = $request['room_capacity'];
         $room->room_price = $request['room_price'];
         $room->floor_number = $request['floor_num'];
         $room->status = $request['status'];
         $room->update();
         return redirect()->route('room.index');
     }
     public function delete($id)
     {
        $room = Room::find($id);
        $room->delete();
        return redirect()->back();
     }
}
