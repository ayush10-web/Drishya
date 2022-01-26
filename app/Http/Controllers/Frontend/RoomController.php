<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\Room;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    public function view($id)
    {
       $room = Room::with('images')->where('id',$id)->first();
       return view('frontend.roomdetails',compact('room'));
    }
    public function booking(Request $request)
    {
        dd($request->all());
        $customer = Customer:: create([
            'name' => $request['name'],
        ]);
    }
}
