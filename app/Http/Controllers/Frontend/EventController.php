<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Event;
use App\Models\Image;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function view($id)
    {
       $menu = "event";
       $event = Event::with('images')->where('id',$id)->first();
       return view('frontend.eventdetails',compact('event', 'menu'));
    }
}
