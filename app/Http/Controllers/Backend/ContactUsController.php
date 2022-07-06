<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\ContactUs;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    public function index()
    {
       $page_name = "ContactUs";
       $contactus = ContactUs::latest()->where('message_from','m')->get();
    //    dd($services);
       return view('backend.contactus.index',compact('page_name','contactus'));
    }
   public function banquet()
   {
      $page_name = "Banquet Inquiries";
      $contactus = ContactUs::latest()->where('message_from','b')->get();
   //    dd($services);
      return view('backend.contactus.banquetInquiry',compact('page_name','contactus'));
   }
   public function messageDelete($id)
   {
      // dd('here');
      $contactus = ContactUs::find($id);
      $contactus->delete();
      return redirect()->back()->with('success_message','deleted successfully');
   }
}
