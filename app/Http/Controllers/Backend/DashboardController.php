<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Models\ContactUs;
use App\Models\Room;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $page_name = "Dashboard";
        $rooms = Room::where('status','A')->get();
        $bookings = Booking::where('status',null)->get();
        $booked = Booking::where('status','B')->get();
        $count_b =count($booked);
        $b_count = count($bookings);
        $contactus = ContactUs::where('status','1')->get();
        $cc_count = count($contactus);
        $c_room = count($rooms);
       return view('backend.dashboard',compact('page_name','c_room','b_count','count_b','cc_count','cc_count'));
    }
}
