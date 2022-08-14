<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Mail\TestMail;
use Illuminate\Support\Facades\Mail;



class MailController extends Controller
{
    public function store(Request $request)
    {


        // 'title' => $request->input('title'),
        // 'channel' => $request->input('channel'),
        // 'duration' => $request->input('duration'),
        // 'description' => $request->input('description'),
        // 'url' => $request->input('url'),
        // 'program_id' => $request->input('program_id'),

        $details = [
            'title' => 'Mail from ItSolutionStuff.com',
            'body' => 'This is for testing email using smtp'
        ];
        Mail::send(new TestMail($details));
        dd("Email is Sent.");



        return response()->json('Email is Sent.');
    }
}
