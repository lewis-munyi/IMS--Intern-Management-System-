<?php

namespace App\Http\Controllers;

use App\Application;
use Illuminate\Http\Request;

class ApplicationController extends Controller
{
    public function index()
    {
        //
        $applications = Application::orderBy('created_at', 'desc')->get();
        return view('hr.dashboard', compact('applications'));
    }

    //View a single application
    public function application(Application $application)
    {
        $application = Application::find($application->id);
        //  dd($application->status);
        return view('hr.application', compact('application'));
    }

    //Show application form
    public function create()
    {
        //Display form for applying
        return view('application');
    }

    //Post an application
    public function store(Request $request)
    {
        //Post the application
        $application = new Application;
        // $application->user_id = Auth::id();
        $application->name = request('name');
        $application->email = request('email');
        $application->id_number = request('id_no');
        $application->supervisor_email = request('supervisor');

        /*
         * File Uploads
         *
         */
        $destinationPath = public_path('/files/application_documents/');

        $file = $request->file('national_id');
        $name = 'national_id.'.$application->id_number.'.'.$file->getClientOriginalExtension();
        $application->national_id = $name;
        $file->move($destinationPath, $name);

        $file = $request->file('KCSE_certificate');
        $name = 'KCSE_certificate.'.$application->id_number.'.'.$file->getClientOriginalExtension();
        $application->KCSE_certificate = $name;
        $file->move($destinationPath, $name);

        $file = $request->file('transcript');
        $name = 'transcript.'.$application->id_number.'.'.$file->getClientOriginalExtension();
        $application->transcript = $name;
        $file->move($destinationPath, $name);

        $file = $request->file('introduction_letter');
        $name = 'introduction_letter.'.$application->id_number.'.'.$file->getClientOriginalExtension();
        $application->introduction_letter = $name;
        $file->move($destinationPath, $name);

        $file = $request->file('application_letter');
        $name = 'application_letter.'.$application->id_number.'.'.$file->getClientOriginalExtension();
        $application->application_letter = $name;
        $file->move($destinationPath, $name);

        $file = $request->file('certificate_of_conduct');
        $name = 'certificate_of_conduct.'.$application->id_number.'.'.$file->getClientOriginalExtension();
        $application->certificate_of_conduct = $name;
        $file->move($destinationPath, $name);

        $file = $request->file('insurance');
        $name = 'insurance.'.$application->id_number.'.'.$file->getClientOriginalExtension();
        $application->insurance = $name;
        $file->move($destinationPath, $name);

//        Upload data
        $application->save();
        return redirect('/application');
    }

    //Get my application
    public function trackApplication(Request $request)
    {
        //Use data from cookies?
        //Enter email Address
        $email = request('email');
        $application = Application::where('email', $email)->get();
        dd($appilcation);
        return view('myApplication', compact('application'));
    }

    public function viewDocument(Application $application)
    {
        $application = Application::find($application->id);
        $parser = new \Smalot\PdfParser\Parser();
        $path = "files"."/".$application->KCSE_certificate;
        $pdf = $parser->parseFile($path);
        $text = $pdf->getText();

        dd($text);
    }

    //Load HR Form
    public function acceptApplication(Application $application)
    {
        $application = Application::find($application->id);
        $application->status = 'accepted';
        $application->save();
        return redirect()->route('hr');  
    }

    //Change approval to accepted/rejected
    public function rejectApplication(Application $application, Request $request)
    {
        $application = Application::find($application->id);
        $application->status = 'rejected';
        $application->save();
        return redirect()->route('hr');  
    }


    // /**
    //  * Show the form for editing the specified resource.
    //  *
    //  * @param  \App\Application  $application
    //  * @return \Illuminate\Http\Response
    //  */
    // public function edit(Application $application)
    // {
    //     $application = Application::find($application->id);
    //     return view('', compact('application'));

    // }

    // //Edit my appilcation
    // public function update(Request $request, Application $application)
    // {
    //     //
    //     $application = Application::find($application->id);
    //     $application->name = request('name');
    //     $application->email = request('email');
    //     $application->certificate_of_conduct = request('certificate_of_conduct');
    //     $application->KCSE_certificate = request('KCSE_certificate');
    //     $application->national_id = request('national_id');
    //     $application->insurance = request('insurance');
    //     $application->transcript = request('transcript');
    //     $application->application_letter = request('application_letter');
    //     $application->introduction_letter = request('introduction_letter');
    //     dd($applcation->toArray());
    //     $application->save();
    //     return redirect('/');
    // }

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
