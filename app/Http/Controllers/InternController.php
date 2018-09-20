<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Progress;
class InternController extends Controller{

    public function index(){

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

    // public function edit ($progress){
    //     $_progress = Progress::where('email', $progress->email)->first();
    //     $progress->week_1      = $progress->week_1;
    //     $progress->week_2      = $progress->week_2;
    //     $progress->week_3      = $progress->week_3;
    //     $progress->week_4      = $progress->week_4;
    //     $progress->week_5      = $progress->week_5;
    //     $progress->week_6      = $progress->week_6;
    //     $progress->week_7      = $progress->week_7;
    //     $progress->week_8      = $progress->week_8;
    //     $progress->week_9      = $progress->week_9;
    //     $progress->week_10      = $progress->week_10;
    //     $progress->week_11     = $progress->week_11;
    //     $progress->week_12      = $progress->week_12;
    //     $progress->save();
        
    // }

    public function edit (Request $request ,$id){
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
}
?>