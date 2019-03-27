<?php

namespace App\Http\Controllers;

use App\progress;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ProgressController extends Controller
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\progress  $progress
     * @return \Illuminate\Http\Response
     */
    public function show(progress $progress)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\progress  $progress
     * @return \Illuminate\Http\Response
     */
    public function edit(progress $progress)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\progress  $progress
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, progress $progress)
    {
        $email = Auth::user()->email;
        $week = $request->input('week');
        $work = $request->input('work');
        DB::table('progersses')
            ->where([
                ['email', '=', $email],
                ['week', '=', $week]
            ])
//            ->where('email', $email)
            ->update(['progress' => $work]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\progress  $progress
     * @return \Illuminate\Http\Response
     */
    public function destroy(progress $progress)
    {
        //
    }
}
