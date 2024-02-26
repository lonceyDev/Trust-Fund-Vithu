<?php

namespace App\Http\Controllers;

use App\Jobs\ContactUs;
use App\Models\Contact;
use Illuminate\Http\Request;

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

    //    Mail::to('8de80170bf53a4')->send(new ContactMessage($data));
    //      dd('sent');
        $job=(new ContactUs($data));
        dispatch($job);
        
        return redirect()->route('contact.create')->with('status', 'Your Mail has been received');
    }

}
