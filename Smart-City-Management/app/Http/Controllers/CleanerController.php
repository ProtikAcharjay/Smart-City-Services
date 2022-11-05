<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\cleaner;
use Illuminate\Http\Request;

class CleanerController extends Controller
{
    //

    function Cleaner(){
        return view('employee.cleanerHome');
    }


    function addCleaner(Request $request){
       

        $request->validate([
            'name'=>'required',
            'phone'=>'required',
            'address'=>'required',
            'dob'=>'required',
            'salary'=>'required',
            'nid'=>'required',
            'jobloc'=>'required',
            'status'=>'required'
           
        ]);


        $cl= new cleaner;
        $cl->cl_name = $request->name;
        $cl->cl_phone = $request->phone;
        $cl->cl_address = $request->address;
        $cl->cl_dob = $request->dob;
        $cl->cl_salary = $request->salary;
        $cl->cl_nid = $request->nid;
        $cl->cl_joblocation = $request->jobloc;
        $cl->cl_status = $request->status;
        
       
        $save=$cl->save();
    
        if($save){
            return back()->with('success','Registered successfully');
        }
        else{
            return back()->with('fail','something went wrong, try again later');
        }
    }
}
