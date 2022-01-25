<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Slider;
use App\Models\SliderImage;
use App\Models\Image;
use App\Models\ImageRoom;
use App\Models\Room;
use App\Models\Service;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    public function index(){
        $sliders = Slider::with('images')->latest()->get();

        $services = Service::with('image')->latest()->get();

        $rooms = Room::with('images')->latest()->take(5)->get();

        return view('frontend.index',compact('sliders','services','rooms'));
    }
}
