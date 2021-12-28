<?php

namespace App\Http\Controllers;

use App\Mail\SendMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class ControllerEmail extends Controller
{
    public function index(){
        Mail::to(Auth::user()->email)->send(new MailNotify(Auth::user()->name));
        return view('successpayment');
    }

    public function success(){
        Mail::to(Auth::user()->email)->send(new MailNotify(Auth::user()->name));
        return view('successbook');
    }
}
