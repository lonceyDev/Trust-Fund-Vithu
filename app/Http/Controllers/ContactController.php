<?php

namespace App\Http\Controllers;

use App\Jobs\ContactUs;
use App\Models\Contact;
use App\Mail\ContactMessage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function create()
    {
        return view('frontend.contact-us');
    }

    public function send_mail(Request $request)


    {
       $data = [
            'name' => $request['name'], 
            'email' => $request['email'],
            'phone' => $request['phone'],
            'subject' => $request['subject'],
            'message' => $request['message'],
           
       ];

       Contact::create($request->all());

       Mail::to('admin@test.com')->send(new ContactMessage($data));
        // dd('sent');
        // $job=(new ContactUs($data));
        // dispatch($job);
        
        return response()->json(['message' => 'Success!']);
    }

}
