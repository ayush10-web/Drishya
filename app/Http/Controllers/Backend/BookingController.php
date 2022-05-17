<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Models\Room;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class BookingController extends Controller
{
    public function index()
    {
        $page_name = "Bookings";
        $bookings = Booking::with('room','customer')->where('status',null)->latest()->get();
        // dd($bookings);
        return view('backend.booking.index',compact('bookings','page_name'));
    }
    public function bookedRoom()
    {
        $page_name = "Booked Room";
        $bookings = Booking::with('room','customer')->where('status','B')->latest()->get();
        // dd($bookings);
        return view('backend.booking.booked',compact('bookings','page_name'));
    }
    public function changeStatus($id)
    {
        $booking = Booking::with('room','customer')->where('id',$id)->first();
        $room = Room::find($booking->room->id);
        if ($room->room_number < 1) {
            return redirect()->back()->with('warning_message','This type of room is full.');
        }
        $details = [
            'title' => 'Mail from Drishya',
            'body' => 'This email is to notify that your 
            room has been booked in drishya for'.$booking->days.' days.'
        ];

        Mail::to($booking->customer->email)->send(new \App\Mail\SendConfirmationMail($details));
        
        $room->room_number = $room->room_number - 1;
        $room->save();
        $booking->status = 'B';
        $booking->save();
        return redirect()->route('booked.room')->with('success_message','Room Booked Succesfully.');
    }

    public function deleteStatus($id){
        $booking =Booking::where('id',$id)->first();

        $booking->delete();
        return redirect()->back();
    }
}
