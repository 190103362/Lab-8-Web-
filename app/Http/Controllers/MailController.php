<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\MyMail;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function send(){
        $obj = new \stdClass();
        Mail::to("190103288@stu.sdu.edu.kz")->send(new MyMail($obj));
        return "Sended";
    }
}