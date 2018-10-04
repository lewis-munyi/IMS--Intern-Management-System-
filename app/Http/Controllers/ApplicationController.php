<?php

namespace App\Http\Controllers;

use App\Application;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Storage;

class ApplicationController extends Controller
{
    public function applicationForm(Request $request){
        $name = $request->input('name');
        $email = $request->input('email');
        $id_no = $request->input('id_no');
        $supervisor = $request->input('supervisor');
        echo($name. " " . $email." ".$id_no." ".$supervisor);

        $id_file = $request->file('id_file')->store('application_documents');
        $kcse = $request->file('kcse')->store('application_documents');
        $transcripts = $request->file('transcripts')->store('application_documents');
        $introduction = $request->file('introduction')->store('application_documents');
        $application = $request->file('application')->store('application_documents');
        $conduct = $request->file('conduct')->store('application_documents');
        $insurance = $request->file('insurance')->store('application_documents');

//        $id_file = Storage::putFile('images/application_documents', $request->file('id_file'));
//        $kcse = Storage::putFile('application_documents', $request->file('kcse'));
//        $transcripts = Storage::putFile('application_documents', $request->file('transcripts'));
//        $introduction = Storage::putFile('application_documents', $request->file('introduction'));
//        $application = Storage::putFile('application_documents', $request->file('application'));
//        $conduct = Storage::putFile('application_documents', $request->file('conduct'));
//        $insurance = Storage::putFile('application_documents', $request->file('insurance'));

        echo($id_file." ". $kcse." ". $transcripts." ". $introduction ." ". $application. " ". $conduct. " ". $insurance );
//        return view('home');

    }
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
        dd($application->toArray());
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
        $application = Appliciation::find($application->id);
        dd($application);
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
        dd($application->toArray());
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
