<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\electrician;
use Illuminate\Http\Request;

class ElectricianController extends Controller
{
    //
    function Electrician(){
        return view('employee.electricianHome');
    }
    function addElectrician(Request $request){
       

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


        $el= new electrician;
        $el->el_name = $request->name;
        $el->el_phone = $request->phone;
        $el->el_address = $request->address;
        $el->el_dob = $request->dob;
        $el->el_salary = $request->salary;
        $el->el_nid = $request->nid;
        $el->el_joblocation = $request->jobloc;
        $el->el_status = $request->status;
        
       
        $save=$el->save();
    
        if($save){
            return back()->with('success','Registered successfully');
        }
        else{
            return back()->with('fail','something went wrong, try again later');
        }
    }
}
