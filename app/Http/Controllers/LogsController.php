<?php

namespace App\Http\Controllers;

use App\Log;
use Auth;
use Illuminate\Http\Request;

class LogsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Return logs for all attaches and interns
        $logs = Log::all();
        $logs->toArray();
        return view('attache.dashboard')->with('logs', $logs->toArray());
//        return(json_encode($logs->toArray()));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Create a new log
        return view('/');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //save users log to database
        $log = new Log;
        $log->user_id = Auth::id();
        $log->week = request('week');
        $log->log = request('log');
        $log->save();
        return (json_encode(['Success']));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Log $log)
    {
        //Show  a log
        $log = Log::where('id', $log->id)->get();
        dd($log);
        return view('');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Log $log)
    {
        //Get log to edit
        $log = Log::find($log->id);
        dd($log);
        return redirect('/', compact('log'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Log $log)
    {
        //Update the log
        $log = Log::find($log->id);
        $log->user_id = Auth::id();
        $log->week = request('week');
        $log->log = request('log');
        $log->save();
        dd($log);
        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, Log $log)
    {
        //Delete a log
        $log = Log::find($log->id);
        $log->delete();
        return redirect('/');
    }
}
