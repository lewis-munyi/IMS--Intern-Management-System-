<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Mail\SchoolSupervisorEmail;
use Illuminate\Support\Facades\Mail;
class schoolsupervisorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('school.dashboard') -> with('response', "Enter your email address here. Your student's report will be sent to this address");
    }

    public function sendMail(Request $request)
    {
        // $supervisor = new users;
        $supervisor = $request->input('email');
        $studentemails = DB::table('users')->where('department',  'ICT')->get();
//         echo json_encode($studentemails);
        $stack = array();

         foreach ($studentemails as $studentemail){
//             echo $studentemail->email." ";
             array_push($stack, $studentemail->email);
         }

         $this->send($stack, $supervisor);
         return view('school.dashboard') -> with('response', 'Successfully sent email to '.$supervisor);
//       return view('school.dashboard') -> with('response', $supervisor);
    }

    public function send($stack, $supervisor)
    {
        $objreport = new \stdClass();
        $objreport->report_one = 'report One Value';
        $objreport->report_two = 'report Two Value';
        $objreport->sender = 'SenderUserName';
        $objreport->receiver = 'ReceiverUserName';

        Mail::to("$supervisor")->send(new SchoolSupervisorEmail($stack));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
