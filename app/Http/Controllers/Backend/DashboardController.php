<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $page_name = "Dashboard";
       return view('backend.dashboard',compact('page_name'));
    }
}
