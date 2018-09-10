<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApplicationsController extends Controller
{
    //
    public function index(Request $request){
        $application = new user;
            $application->name = $request->input('name');
            $application->email = $request->input('email');
            $application->national_id = $request->input('national_id');
            $application->role = $request->input('role');
            $application->department = $request->input('department');
            $application->status = $request->input('status');
            $application->password = $request->input('password');
            $application->password = bcrypt($application->password);
            $application->save();
        return view('hr.application');
    }
}
