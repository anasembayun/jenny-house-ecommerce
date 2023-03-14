<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Mail;

class ContactController extends Controller
{
    public function create(){
        return view('contact');

    }

    public function store(Request $request){
        $mail = new Mail;
        $mail->name = $request->post('name');
        $mail->phone_number = $request->post('phone_number');
        $mail->email = $request->post('email');
        $mail->company = $request->post('company');
        $mail->subject = $request->post('subject');
        $mail->question = $request->post('question');
        $mail->save();
        return redirect()->route('mails.create')->with('alert', 'Submit success!');
        
    }
}
