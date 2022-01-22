<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Event;

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
        Event::create([
            'event_name' => $request['event_name'],
            'start_date' => $request['start_date'],
            'end_date' => $request['end_date'],
            'description' => $request['description'],
            'status' => $request['status']
        ]);
        return redirect()->route('event.index');
     }

     public function edit($id)
     {
         $event = Event::find($id);
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
         return redirect()->route('event.index');
     }

     public function delete($id)
     {
        $event = Event::find($id);
        $event->delete();
        return redirect()->back();
     }
}
