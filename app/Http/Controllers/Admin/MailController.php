<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Mail;

class MailController extends Controller
{
    public function index(){
        $mails = Mail::paginate(10);
        return view('admin.mails.index', compact('mails'));
    }

    public function show($id){

    }

    public function destroy($id){

    }
}
