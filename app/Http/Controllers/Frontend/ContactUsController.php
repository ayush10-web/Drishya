<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ContactUs;

class ContactUsController extends Controller
{
    public function add(Request $request){
        ContactUs:: create([
            'name' => $request['name'],
            'contact_number' => $request['contact_number'],
            'email' => $request['email'],
            'message' => $request['message'],
        ]);
        return redirect()->back()->with('success_message','Thankyou for your inquiry. We will reach back to you soon.');
    }
}
