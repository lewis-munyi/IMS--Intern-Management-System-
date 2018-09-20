<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SupervisorController extends Controller
{
    public function school()
    {
        //
        return view('supervisor.school');
    }
    public function work()
    {
        //
        return view('supervisor.work');
    }
    
    public function createintern()
    {
        //
        return view('supervisor.createintern');
    }
}
