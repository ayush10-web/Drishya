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
       $contactus = ContactUs::latest()->get();
    //    dd($services);
       return view('backend.contactus.index',compact('page_name','contactus'));
    }}
