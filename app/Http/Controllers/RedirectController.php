<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RedirectController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::user()->role == "Super-Administrator"){
            return view('super');
        }
        elseif (Auth::user()->role == "Administrator"){
            return view('admin');
        }
        elseif (Auth::user()->role == "Attache" ){
            return view('attache');
        }
        elseif (Auth::user()->role == "Intern"){
            return view('intern');
        }
        else return view('welcome');
    }
}
