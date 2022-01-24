<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Slider;
use App\Models\SliderImage;
use App\Models\Image;
use App\Models\ImageRoom;
use App\Models\Room;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    public function index(){
        $sliders = Slider::latest()->get();
        $slidersImages = [];
        foreach($sliders as $slides){
            $imageDetail = DB::table('slider_images as SI')
                            ->join('images as I', 'I.id', '=', 'SI.image_id')
                            ->select('I.*')
                            ->where('SI.slider_id', $slides->id)
                            ->get();
            $slidersImages[$slides->id] = $imageDetail; 
        }
        $services = DB::table('services as S')
        ->join('images as I', 'I.id', '=', 'S.media_id')
        ->select('S.*', 'I.file_path')->skip(0)->take(3)
        ->get();

        $filePaths = [];
        foreach($services as $s){
            $filePaths[$s->id] = $s->file_path;
        }

        $rooms = Room::latest()->skip(0)->take(5)->get();
        $roomImage = [];
        foreach($rooms as $room){
            $roomImage[$room->id] = DB::table('image_rooms as IR')
                                    ->join('images as I', 'I.id', '=', 'IR.image_id')
                                    ->select('IR.*', 'I.file_path')
                                    ->where('IR.room_id', $room->id)
                                    ->skip(0)->take(1)->get();
        }
        return view('frontend.index',compact('sliders', 'slidersImages', 'services', 'filePaths','rooms','roomImage'));
    }
}
