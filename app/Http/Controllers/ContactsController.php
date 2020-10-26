<?php

namespace App\Http\Controllers;

use App\Mail\ContactReceived;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactsController extends Controller
{
    public function store()
    {
        $rules = [
            'name' => 'required|string',
            'email' => 'required|email',
            'message' => 'required|string',
            'g-recaptcha-response' => 'required|recaptcha'
        ];

        request()->validate($rules);

        Mail::to(config('mail.to'))->send(new ContactReceived(request()));

        return redirect()->back()->with('message', "Thank you for your message. I will get back to you soon.");

    }
}
