<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Request as FacadesRequest;

class RoomController extends Controller
{
     public function index()
     {
        $page_name = "Room";
        return view('backend.room.index',compact('page_name'));
     }

     public function create()
     {
        dd('here');
     }
     public function store(Request $request)
     {
        dd('here');
     }
     public function edit($id)
     {
         dd('here');
     }
     public function update(Request $request, $id)
     {
         dd('here');
     }
     public function delete()
     {
         dd('here');
     }
}
