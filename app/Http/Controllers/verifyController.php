<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class verifyController extends Controller
{
    public function index()
    {
//        dd(Auth::user());
        $role = Auth::user()->role;
        if ($role == 'Super Admin'){
            echo 'Hello Admin';
        }
        elseif ($role == 'hr'){
            echo 'Hello HR';
        }
        elseif ($role == 'attache'){
            echo 'hello attache';
        }
        else {
            echo 'Othersise?';
        }
    }
}
