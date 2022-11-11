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
    function show()
    {

        $data=array(
            'list'=>DB::table('plumbers')->get()
        );
        return view('employee.pl_emp_show',$data);
    }
    function update($id)
    {

        $row= DB::table('plumbers')
        ->where('pl_id',$id)
        ->first();

        $data=[
            'info'=>$row
        ];

        return view('employee.pl_emp_update',$data);
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

        $updating= DB::table('plumbers')->where('pl_id',$request->input('pl_id'))->update([
         'pl_name'=> $request->input('name'),
         'pl_phone'=> $request->input('phone'),
         'pl_address'=> $request->input('address'),
         'pl_dob'=> $request->input('dob'),
         'pl_salary'=> $request->input('salary'),
         'pl_nid'=> $request->input('nid'),
         'pl_joblocation' => $request->input('jobloc'),
         'pl_status'=> $request->input('status')

      ]);

      return redirect('plshow');




}
function delete($id)
{
    $del= DB::table('plumbers')
    ->where('pl_id',$id)
    ->delete();
    return redirect('plshow');
}
}
