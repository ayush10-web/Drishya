<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Models\Customer;
use App\Models\Image;
use App\Models\Room;
use App\Models\Setting;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    public function view($id)
    {
       $room = Room::with('images')->where('id',$id)->first();
       $rooms = Room::with('images')->where('status','A')->latest()->take(2)->get();
       $menu = 'rooms';

       return view('frontend.roomdetails',compact('room','rooms','menu'));
    }
    public function booking(Request $request,$id)
    {
        // dd($request->all());
        $customer = Customer:: create([
            'name' => $request['name'],
            'contact' => $request['number'],
            'email' => $request['email'],
            'address' => $request['address'],
        ]);
        Booking::create([
            'room_id' => $id,
            'customer_id' => $customer->id,
            'from' => $request['from'],
            'to' => $request['to'],
            'days' => $request['days'],
        ]);
        return redirect()->back()->with('success_message','Thankyou for Booking. Details will be sent to your email');
    }
    public function room()
    {
        // dd('here');
        $roomimage = null;
        $sett = Setting::where('key','roomimage')->first();
        if ($sett->value != null) {
            $roomimage = Image::where('id',$sett->value)->first();
        }
        $menu = 'rooms';
        $rooms = Room::with('images')->where('status','A')->latest()->get();
        return view('frontend.room',compact('rooms','roomimage','menu'));
    }
}
