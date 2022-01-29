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
        $sliders = Slider::with('images')->where('slider_code','home')->latest()->get();

        $services = Service::with('image')->latest()->get();

        $rooms = Room::with('images')->where('status','A')->latest()->take(5)->get();
        // dd($sliders);
        // return view('frontend.index',compact('sliders','services','rooms'));
        // dd($rooms);
        $menu = "index";
        return view('frontend.index',compact('sliders','services','rooms','menu'));
    }

    public function contact(){
        $menu = "contact";

        return view('frontend.contact',compact('menu'));
    }

    public function about(){
        $menu = "about";
        return view('frontend.about',compact('menu'));
    }

    public function storeContact(Request $request){
        dd($request);
    }

    public function services(){
        return view();
    }

    public function restaurant(){
        $menu = "restaurant";

        $sliders = Slider::with('images')->where('slider_code','res')->latest()->get();
        // dd($sliders);
        return view ('frontend.restaurant',compact('sliders','menu'));
    }

    public function banquet(){
        return view ('frontend.banquet');
    }
}
