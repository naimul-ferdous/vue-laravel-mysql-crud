<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Mail\TestMail;
use Illuminate\Support\Facades\Mail;
use App\Models\GeneralFeebback;


class MailController extends Controller
{
    public function store(Request $request)
    {

        $feedback = new GeneralFeebback([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'subject' => $request->input('subject'),
            'suggestion' => $request->input('suggestion'),
        ]);

        if ($this->sendMail($request)) {
            $feedback->save();
            return response()->json('Feedback created!');
        } else {
            return response()->json('Error: Mail sending or Feebback save failure');
        }
    }

    public function sendMail(Request $request)
    {

        $details = [
            'email' => $request->input('email'),
            'title' => "This is the tribute to talaiwah",
            'body' => "All the rajni fans. Don't miss the chance. Lungi dance lungi dance, lungi dance, lungi dance"
        ];

        Mail::send(new TestMail($details));

        return !(count(Mail::failures()) > 0);
    }
}
