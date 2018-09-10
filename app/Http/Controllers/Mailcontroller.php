<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\SchoolSupervisorEmail;
use Illuminate\Support\Facades\Mail;
class Mailcontroller extends Controller
{
    public function send()
    {
        $objreport = new \stdClass();
        $objreport->report_one = 'report One Value';
        $objreport->report_two = 'report Two Value';
        $objreport->sender = 'SenderUserName';
        $objreport->receiver = 'ReceiverUserName';

        Mail::to("erickiseemulwa@gmail.com")->send(new SchoolSupervisorEmail($objreport));
    }
}
