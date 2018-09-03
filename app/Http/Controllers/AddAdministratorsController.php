<?php

namespace App\Http\Controllers;

use App\addAdministrators;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\Compound;

class AddAdministratorsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $user = new addAdministrators;
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->national_id = $request->input('national_id');
        $user->role = $request->input('role');
        $user->department = $request->input('department');
        $user->status = $request->input('status');
        $user->password= $request->input('password');
        $user->password= bcrypt($user->password);
        $user->save();
        return response('Success', 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\addAdministrators  $addAdministrators
     * @return \Illuminate\Http\Response
     */
    public function show(addAdministrators $addAdministrators)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\addAdministrators  $addAdministrators
     * @return \Illuminate\Http\Response
     */
    public function edit(addAdministrators $addAdministrators)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\addAdministrators  $addAdministrators
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, addAdministrators $addAdministrators)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\addAdministrators  $addAdministrators
     * @return \Illuminate\Http\Response
     */
    public function destroy(addAdministrators $addAdministrators)
    {
        //
    }
}
