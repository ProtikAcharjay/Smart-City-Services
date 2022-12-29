<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\cleaner;
use App\Models\plumber;
use App\Models\electrician;
use App\Models\cl_emp;

class ApiController extends Controller
{
    //
    function getData()
    {
            return cleaner::all();

    }
    function getDatap()
    {
            return plumber::all();

    }
    function getDatae()
    {
            return electrician::all();

    }
    function postData(Request $request)
    {

        $cl= new cleaner;
        $cl->cl_name = $request->cl_name;
        $cl->cl_phone = $request->cl_phone;
        $cl->cl_address = $request->cl_address;
        $cl->cl_dob = $request->cl_dob;
        $cl->cl_salary = $request->cl_salary;
        $cl->cl_nid = $request->cl_nid;
        $cl->cl_joblocation = $request->cl_joblocation;
        $cl->cl_status = $request->cl_status;
        $save=$cl->save();

    }
    function login(Request $request)
    {
       $user= cl_emp::where('cl_emp_email',$request->cl_emp_email)->first();

       return $user;
    }
   function delete($id)
   {

    $del= DB::table('cleaners')
    ->where('cl_id',$id)
    ->delete();
    if( $del){

        return ["result"=>"Deleted"];
    }
    else{
        return ["result"=>"not Deleted"];
    }
   }
}
