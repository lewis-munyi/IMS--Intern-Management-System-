<?php

namespace App\Http\Controllers;

use App\Application;
use Illuminate\Http\Request;
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
     * @param  \App\Application  $application
     * @return \Illuminate\Http\Response
     */
    public function show(Application $application)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Application  $application
     * @return \Illuminate\Http\Response
     */
    public function edit(Application $application)
    {
        //
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
    }
}
