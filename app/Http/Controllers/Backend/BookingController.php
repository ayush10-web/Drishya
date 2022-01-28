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
        $details = [
            'title' => 'Mail from Drishya',
            'body' => 'This email is to notify that your 
            room has been booked in drishya for'.$booking->days.' days.'
        ];
        Mail::to($booking->customer->email)->send(new \App\Mail\SendConfirmationMail($details));
        $room = Room::find($booking->room->id);
        $room->status = 'U';
        $room->save();
        $booking->status = 'B';
        $booking->save();
        return redirect()->route('booked.room');
    }
}
