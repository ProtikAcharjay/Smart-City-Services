<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\plumber;
use Illuminate\Http\Request;

class PlumberController extends Controller
{
    //
    function Plumber(){
        return view('employee.plumberHome');
    }

    function addPlumber(Request $request){
       

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


        $pl= new plumber;
        $pl->pl_name = $request->name;
        $pl->pl_phone = $request->phone;
        $pl->pl_address = $request->address;
        $pl->pl_dob = $request->dob;
        $pl->pl_salary = $request->salary;
        $pl->pl_nid = $request->nid;
        $pl->pl_joblocation = $request->jobloc;
        $pl->pl_status = $request->status;
        
       
        $save=$pl->save();
    
        if($save){
            return back()->with('success','Registered successfully');
        }
        else{
            return back()->with('fail','something went wrong, try again later');
        }
    }
}
