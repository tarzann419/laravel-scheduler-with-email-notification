<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Test;
use App\Mail\TestMail;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function sendMail(){
        $tests = Test::all();
        Mail::to('dan@info.com')->send(new TestMail($tests));
    }
}
