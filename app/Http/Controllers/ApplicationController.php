<?php

namespace App\Http\Controllers;

use App\Application;
use Illuminate\Http\Request;
use App\User;

class ApplicationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $applications = Application::all();
        return view('', compact('applications'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Display form for applying
        return view('');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Post the application
        $application = new Application;
        $application->user_id = Auth::id();
        $application->name = request('name');
        $application->email = request('email');
        $application->certificate_of_conduct = request('certificate_of_conduct');
        $application->KCSE_certificate = request('KCSE_certificate');
        $application->national_id = request('national_id');
        $application->insurance = request('insurance');
        $application->transcript = request('transcript');
        $application->application_letter = request('application_letter');
        $application->introduction_letter = request('introduction_letter');
        dd($applcation->toArray());
        $application->save();
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Application  $application
     * @return \Illuminate\Http\Response
     */
    public function show(Application $application)
    {
        //Display one application
        $application = Applciation::find($application->id);
        dd($applcation);
        return view('',  compact('applcation'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Application  $application
     * @return \Illuminate\Http\Response
     */
    public function edit(Application $application)
    {
        $application = Application::find($application->id);
        return view('', compact('application'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Application  $application
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Application $application)
    {
        //
        $application = Application::find($application->id);
        $application->name = request('name');
        $application->email = request('email');
        $application->certificate_of_conduct = request('certificate_of_conduct');
        $application->KCSE_certificate = request('KCSE_certificate');
        $application->national_id = request('national_id');
        $application->insurance = request('insurance');
        $application->transcript = request('transcript');
        $application->application_letter = request('application_letter');
        $application->introduction_letter = request('introduction_letter');
        dd($applcation->toArray());
        $application->save();
        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Application  $application
     * @return \Illuminate\Http\Response
     */
    public function destroy(Application $application)
    {
        //
        $application = Application::find($application->id);
        $application->delete();
        return redirect('/');

    }
}
