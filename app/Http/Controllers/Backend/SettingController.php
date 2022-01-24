<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function index()
    {
        $page_name = "Setting";
        // $sliders = Slider::latest()->get();
     //    dd($services);
        return view('backend.setting.index',compact('page_name'));
    }
}
