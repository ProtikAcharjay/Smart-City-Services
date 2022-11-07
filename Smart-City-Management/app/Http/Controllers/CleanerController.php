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
    function show()
    {

        $data=array(
            'list'=>DB::table('cleaners')->get()
        );
        return view('employee.cl_emp_show',$data);
    }
    function update($id)
    {

        $row= DB::table('cleaners')
        ->where('cl_id',$id)
        ->first();

        $data=[
            'info'=>$row
        ];

        return view('employee.cl_emp_update',$data);
    }
    function edit( Request $request)
    {
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

        $updating= DB::table('cleaners')->where('cl_id',$request->input('cl_id'))->update([
         'cl_name'=> $request->input('name'),
         'cl_phone'=> $request->input('phone'),
         'cl_address'=> $request->input('address'),
         'cl_dob'=> $request->input('dob'),
         'cl_salary'=> $request->input('salary'),
         'cl_nid'=> $request->input('nid'),
         'cl_joblocation' => $request->input('jobloc'),
         'cl_status'=> $request->input('status')

      ]);

      return redirect('clshow');




}
function delete($id)
{
    $del= DB::table('cleaners')
    ->where('cl_id',$id)
    ->delete();
    return redirect('clshow');
}
}
