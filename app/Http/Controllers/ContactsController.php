<?php

namespace App\Http\Controllers;

use App\Mail\ContactReceived;
use Illuminate\Support\Facades\Mail;

class ContactsController extends Controller
{
    public function store()
    {
        $rules = [
            'name' => 'required|string',
            'email' => 'required|email',
            'message' => 'required|string',
//            'g-recaptcha-response' => 'required|recaptcha'
        ];

        request()->validate($rules);

        Mail::to('frz.jafari@gmail.com')->send(new ContactReceived(request()));

        return ["message" => "Thank you for your message. I will get back to you as soon as possible."];

    }
}
