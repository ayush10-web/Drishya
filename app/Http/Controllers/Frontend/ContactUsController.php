<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ContactUs;

class ContactUsController extends Controller
{
    public function add(Request $request){
        $request->validate([
            'captcha' => 'required|captcha'
        ]);
        ContactUs:: create([
            'name' => $request['name'],
            'contact_number' => $request['contact_number'],
            'email' => $request['email'],
            'message' => $request['message'],
            'message_from' => $request['message_from'],
        ]);
        return redirect()->back()->with('success_message','Thankyou for your inquiry. We will reach back to you soon.');
    }
    public function reloadCaptcha()
    {
        return response()->json(['captcha'=> captcha_img()]);
    }
    public function markSeenUnseen($id){
        $contactUs = ContactUs::find($id);
        $contactUs->status = !$contactUs->status;
        $contactUs->save();
        if ($contactUs->status==0) {
            $status = "seen";
        } else {
            $status = "unseen";
        }
        return redirect()->back()->with('success_message','Message marked '.$status.' succesfully.');
    }
}
