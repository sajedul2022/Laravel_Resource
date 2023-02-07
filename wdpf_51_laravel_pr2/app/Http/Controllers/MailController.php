<?php

namespace App\Http\Controllers;

use App\Mail\DemoMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller{

    public function index()
    {
        $mailData = [
            'title' => 'Mail from sajedulTech.com',
            'body' => 'This is for testing email using smtp.'
        ];

        Mail::to('sajedul2016@gmail.com')->send(new DemoMail($mailData));

        dd("Email is sent successfully.");
    }

    public function contactForm(){
        return view('emails.contact');
    }

    public function messageSend(Request $request){
        // $datas = $request->all();
        // dd($datas);

        $sender_name = $request->sender_name;
        $sender_email = $request->sender_email;

        $mailData = [
            'sender_name' => $request->sender_name,
            'sender_email' => $request->sender_email,
            'sender_message' => $request->sender_message
        ];

        Mail::to('sajedul.idb.info@gmail.com')->send(new DemoMail($mailData));
        // dd('Email is sent Succssfully');

        return back()->with('msg', 'We have received your message.');


    }
}
