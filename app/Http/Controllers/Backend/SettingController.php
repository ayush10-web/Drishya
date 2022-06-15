<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Image;
use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function index()
    {
        $page_name = "Setting";
        $sets = Setting::get();
        $setting =[];
        foreach ($sets as $i => $set) {
           $setting[$set->key] = $set->value;
        }
        $logo = null;
        $sett = Setting::where('key','logo')->first();
        // if ($sett->value != null) {
        //     $logo = Image::where('id',$sett->value)->first();
        // }
        $roomimage = null;
        $sett = Setting::where('key','roomimage')->first();
        // if ($sett->value != null) {
        //     $roomimage = Image::where('id',$sett->value)->first();
        // }
        // dd($setting);
        return view('backend.setting.index',compact('page_name','setting','logo','roomimage'));
    }
    public function store(Request $request)
    {
        $setting = Setting::get();
        // dd($setting);
        $setting = Setting::where('key','name')->first();
        $setting->value = $request->name;
        $setting->save();
        $setting = Setting::where('key','address')->first();
        $setting->value = $request->address;
        $setting->save();
        $setting = Setting::where('key','email')->first();
        $setting->value = $request->email;
        $setting->save();
        $setting = Setting::where('key','phoneNumber')->first();
        $setting->value = $request->phoneNumber;
        $setting->save();
        $setting = Setting::where('key','mobileNumber')->first();
        $setting->value = $request->mobileNumber;
        $setting->save();
        $setting = Setting::where('key','facebook')->first();
        $setting->value = $request->facebook;
        $setting->save();
        $setting = Setting::where('key','instagram')->first();
        $setting->value = $request->instagram; 
        $setting->save();
        $setting = Setting::where('key','twitter')->first();
        $setting->value = $request->twitter;
        $setting->save();
        $setting = Setting::where('key','website')->first();
        $setting->value = $request->website;
        $setting->save();
        $setting = Setting::where('key','youtube')->first();
        $setting->value = $request->youtube;
        $setting->save();
        $setting = Setting::where('key','room')->first();
        $setting->value = $request->room;
        // dd($setting);
        $setting->save();
        $setting = Setting::where('key','checkin')->first();
        $setting->value = $request->checkin;
        $setting->save();
        $setting = Setting::where('key','checkout')->first();
        $setting->value = $request->checkout;
        $setting->save();
        if($request->hasFile('logo')){
            // dd($request->logo);
            $imagename =  rand('0','100000').$request->logo->getClientOriginalName();
            $path = "uploads/logo/";
                if (!is_dir($path)) {
                    mkdir($path, 0777, true);
                }
                $name = $request->logo->getClientOriginalName();
                $pos = strpos($name, ".");
                $ext = substr($name, $pos+1); 
                $imagename = time().rand('0', '100000').$name;
                $img  = $request->logo->move($path,$imagename);
                $imgpath = '/'.$path.$imagename;
                
                $image = Image::create([
                 'file_path' => $imgpath,
                 'file_name' => $imagename,
                 'file_extension' => $ext,
                 'status' => 1
                 ]);
                 $setting = Setting::where('key','logo')->first();
                 $setting->value = $image->id;
                 $setting->save();    
        }
        if($request->hasFile('roomimage')){
            // dd($request->logo);
            $imagename =  rand('0','100000').$request->roomimage->getClientOriginalName();
            $path = "uploads/roomimage/";
                if (!is_dir($path)) {
                    mkdir($path, 0777, true);
                }
                $name = $request->roomimage->getClientOriginalName();
                $pos = strpos($name, ".");
                $ext = substr($name, $pos+1); 
                $imagename = time().rand('0', '100000').$name;
                $img  = $request->roomimage->move($path,$imagename);
                $imgpath = '/'.$path.$imagename;
                
                $image = Image::create([
                 'file_path' => $imgpath,
                 'file_name' => $imagename,
                 'file_extension' => $ext,
                 'status' => 1
                 ]);
                 $setting = Setting::where('key','roomimage')->first();
                 $setting->value = $image->id;
                 $setting->save();    
        }
        return redirect()->route('setting.index')->with('success_message','Settings Updated');
    }
}
