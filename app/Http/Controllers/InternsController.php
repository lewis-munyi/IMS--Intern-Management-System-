<?php

namespace App\Http\Controllers;
use App\Intern;
use Illuminate\Http\Request;

class InternsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $Intern = Intern::all();
       
       return view('interns.index')->with('interns', $Intern);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('supervisor.createintern');
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
            $Intern = new Intern;
            $Intern->name = $request->input('name');
            $Intern->email = $request->input('email');
            $Intern->supervisor = $request->input('supervisor');
            $Intern->duties = $request->input('duties');
            $Intern->start_date = $request->input('start');
            $Intern->end_date = $request->input('end');
            $Intern->save();
//            return redirect('/super')->with('response', '2');
//            return view('super.dashboard') -> with('response', 'success');
            return redirect('supervisor.createintern')->with('success','Intern added successfully');
        }
        catch (QueryException $exception){
            $response = array();
            $response['type'] = "Error";
            $response['code'] = $exception->getCode();
            $response['message'] = $exception->getMessage();
            return view('supervisor.createintern') -> with('response', $exception->getMessage());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
