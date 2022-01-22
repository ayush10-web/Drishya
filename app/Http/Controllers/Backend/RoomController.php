<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Room;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Request as FacadesRequest;

class RoomController extends Controller
{
     public function index()
     {
        $page_name = "Room";
        $rooms = Room::latest()->get();
        return view('backend.room.index',compact('page_name','rooms'));
     }

     public function create()
     {
        $page_name = "Add New Room";
        return view('backend.room.create',compact('page_name'));
     }
     public function store(Request $request)
     {
        Room::create([
            'room_number' => $request['room_no'],
            'capacity' => $request['room_capacity'],
            'room_price' => $request['room_price'],
            'floor_number' => $request['floor_num'],
            'status' => $request['status']
        ]);
        return redirect()->route('room.index');
     }
     public function edit($id)
     {
         $room = Room::find($id);
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
