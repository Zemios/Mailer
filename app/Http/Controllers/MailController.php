<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function send(Request $request) {
        $data = $request->validate([
            "name" => "required|string|max:255",
            "email"=> "required|email|max:255",
            "content" => "required|string|max:5000",
        ]);

        Mail::to('zemios.official@gmail.com')
        ->send(new \App\Mail\ContactMail(
            $data['name'],
            $data['email'],
            $data['content']
        ));

        Mail::to($data['email'])
        ->send(new \App\Mail\SuccessMail(
            $data['name'],
        ));
    }
}
