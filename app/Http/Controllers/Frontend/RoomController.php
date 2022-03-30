<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Models\Customer;
use App\Models\Image;
use App\Models\Room;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class RoomController extends Controller
{
    public function view($id)
    {
       $room = Room::with('images')->where('id',$id)->first();
       $booking = Booking::where('room_id',$id)->where('from', '>=', date('Y-m-d'))->get();
       
       $dateArray = [];
          if (count($booking) > 0) {
              foreach ($booking as $value) {
                $startDate = strtotime($value->from);
                $endDate = strtotime($value->to);
                for ($currentDate = $startDate; $currentDate < $endDate; 
                                                $currentDate += (86400)) {
                                                        
                    $date = date('Y-m-d', $currentDate);
                    if (!in_array($date, $dateArray))
                        {
                            $dateArray[] = $date;
                        }
                }
              }
          }  
    //    dd($dateArray);
       $rooms = Room::with('images')->where('status','A')->latest()->take(2)->get();
       $menu = 'rooms';

       return view('frontend.roomdetails',compact('room','rooms','menu','dateArray'));
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
        $details = [
            'title' => 'Mail from Drishya',
            'body' => 'This email is to notify that we have received your request. we will contact you again with the confirmation mail.'
        ];
        Mail::to($request->email)->send(new \App\Mail\SendConfirmationMail($details));
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
        $rooms = Room::with('images')->latest()->get();
        return view('frontend.room',compact('rooms','roomimage','menu'));
    }
    public function checkDate(Request $request)
    {
        $checkdate = $request->date;
        $id = $request->id;

       $room = Room::with('images')->where('id',$id)->first();
       $booking = Booking::where('room_id',$id)->where('from', '>=', date('Y-m-d'))->get();
       
       $dateArray = [];
          if (count($booking) > 0) {
              foreach ($booking as $value) {
                $startDate = strtotime($value->from);
                $endDate = strtotime($value->to);
                for ($currentDate = $startDate; $currentDate < $endDate; 
                                                $currentDate += (86400)) {
                                                        
                    $date = date('Y-m-d', $currentDate);
                    if (!in_array($date, $dateArray))
                        {
                            $dateArray[] = $date;
                        }
                }
              }
          }  
          if (in_array($checkdate, $dateArray)) {
            return response()->json('y');
          } else {
            return response()->json('n');
          }
          
        return response()->json([
            $date,
            $id
        ]);
    }
}
