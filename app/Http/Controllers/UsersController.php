<?php

namespace App\Http\Controllers;

use App\users;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UsersController extends Controller
{
//    public function __construct()
//    {
//        $this->middleware('auth');
//    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Fetch all users
        $users = DB::table('users')->get();
//        $users = json_encode($users);
        return view('super.dashboard')->with('response', $users);
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
        try {
            //
            $user = new users;
            $user->name = $request->input('name');
            $user->email = $request->input('email');
            $user->national_id = $request->input('national_id');
            $user->role = $request->input('role');
            $user->department = $request->input('department');
            $user->status = $request->input('status');
            $user->password = $request->input('password');
            $user->password = bcrypt($user->password);
            $user->save();
//            return redirect('/super')->with('response', '2');
//            return view('super.dashboard') -> with('response', 'success');
            return redirect()->route('super');
        }
        catch (QueryException $exception){
            $response = array();
            $response['type'] = "Error";
            $response['code'] = $exception->getCode();
            $response['message'] = $exception->getMessage();
            return view('super.dashboard') -> with('response', $exception->getMessage());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\users  $users
     * @return \Illuminate\Http\Response
     */
    public function show(users $users)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\users  $users
     * @return \Illuminate\Http\Response
     */
    public function edit(users $users)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\users  $users
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, users $users)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\users  $users
     * @return \Illuminate\Http\Response
     */
    public function destroy(users $users)
    {
        //
    }
}
