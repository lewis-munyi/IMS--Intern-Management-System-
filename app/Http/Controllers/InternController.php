<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InternController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $email = 'erickisee@yahoo.com';
        $null = '' ;
        $progress = Progress::where('email', $email)->first();

        if($progress==null){
            print_r('nothing found');
            $progress            = new Progress();
            $progress->email      = $email;
            $progress->week_1      = $null;
            $progress->week_2      = $null;
            $progress->week_3      = $null;
            $progress->week_4      = $null;
            $progress->week_5      = $null;
            $progress->week_6      = $null;
            $progress->week_7      = $null;
            $progress->week_8      = $null;
            $progress->week_9      = $null;
            $progress->week_10      = $null;
            $progress->week_11     = $null;
            $progress->week_12      = $null;
            $progress->status      = $null;
            $progress->remark      = $null;
            $progress->remember_token     = $null;
            $progress->created_at    = date("Y-m-d H:i:s");
            $progress->updated_at      = date("Y-m-d H:i:s");
            $progress->save();
        }

        return view ('intern/index', compact('progress'));
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
    public function edit(Request $request, $id)
    {
        # code...
        $progress = Progress::find($id);

        switch ($request->week) {
            case '1':
                # code...
                $progress->week_1      = $request->value;
                break;

            case '2':
                # code...
                $progress->week_2      = $request->value;
                break;

            case '3':
                # code...
                $progress->week_3      = $request->value;
                break;

            case '4':
                # code...
                $progress->week_4      = $request->value;
                break;

            case '5':
                # code...
                $progress->week_5      = $request->value;
                break;

            case '6':
                # code...
                $progress->week_6      = $request->value;
                break;

            case '7':
                # code...
                $progress->week_7      = $request->value;
                break;

            case '8':
                # code...
                $progress->week_8      = $request->value;
                break;

            case '9':
                # code...
                $progress->week_9      = $request->value;
                break;

            case '10':
                # code...
                $progress->week_10      = $request->value;
                break;

            case '11':
                # code...
                $progress->week_11      = $request->value;
                break;

            case '12':
                # code...
                $progress->week_12      = $request->value;
                break;

            default:
                # code...
                break;
        }
        $progress->save();
        return view ('intern/index', compact('progress'));
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
