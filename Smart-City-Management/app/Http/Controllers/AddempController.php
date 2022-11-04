<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\cl_emp;
use App\Models\pl_emp;
use App\Models\el_emp;

class AddempController extends Controller
{
    //
    function addemp(){
        return view('admin.addemPage');
    }


    function add( Request $request)
{

    $request->validate([
        'name'=>'required',
        'email'=>'required',  //when there is no data checking uique could generate error
        'phone'=>'required',
        'address'=>'required',
        'dob'=>'required',

        'password'=>'required'
    ]);


    if($request->addtype == 'Electracian'){



        $el= new el_emp;
        $el->el_emp_name = $request->name;
        $el->el_emp_email = $request->email;
        $el->el_emp_phone = $request->phone;
        $el->el_emp_dob = $request->dob;
        $el->el_emp_address = $request->address;
        $el->el_emp_password = Hash::make($request->password);
        $save=$el->save();

        if($save){
            return back()->with('success','One Electrician Employee has added');
        }
        else{
            return back()->with('fail','something went wrong, try again later');
        }

    }
   if($request->addtype == 'Cleaner')
   {
    $cl= new cl_emp;
    $cl->cl_emp_name = $request->name;
    $cl->cl_emp_email = $request->email;
    $cl->cl_emp_phone = $request->phone;
    $cl->cl_emp_dob = $request->dob;
    $cl->cl_emp_address = $request->address;
    $cl->cl_emp_password = Hash::make($request->password);
    $save=$cl->save();

    if($save){
        return back()->with('success','One Cleaner Employee has added');
    }
    else{
        return back()->with('fail','something went wrong, try again later');
    }
   }


    if($request->addtype == 'Plumber')
   {
    $pl= new pl_emp;
    $pl->pl_emp_name = $request->name;
    $pl->pl_emp_email = $request->email;
    $pl->pl_emp_phone = $request->phone;
    $pl->pl_emp_dob = $request->dob;
    $pl->pl_emp_address = $request->address;
    $pl->pl_emp_password = Hash::make($request->password);
    $save=$pl->save();

    if($save){
        return back()->with('success','One Plumber Employee has added');
    }
    else{
        return back()->with('fail','something went wrong, try again later');
    }
   }


}
}
