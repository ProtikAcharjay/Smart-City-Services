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
    function show()
    {

        $data=array(
            'list'=>DB::table('electricians')->get()
        );
        return view('employee.el_emp_show',$data);
    }
    function update($id)
    {

        $row= DB::table('electricians')
        ->where('el_id',$id)
        ->first();

        $data=[
            'info'=>$row
        ];

        return view('employee.el_emp_update',$data);
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

        $updating= DB::table('electricians')->where('el_id',$request->input('el_id'))->update([
         'el_name'=> $request->input('name'),
         'el_phone'=> $request->input('phone'),
         'el_address'=> $request->input('address'),
         'el_dob'=> $request->input('dob'),
         'el_salary'=> $request->input('salary'),
         'el_nid'=> $request->input('nid'),
         'el_joblocation' => $request->input('jobloc'),
         'el_status'=> $request->input('status')

      ]);

      return redirect('elshow');




}
function delete($id)
{
    $del= DB::table('electricians')
    ->where('el_id',$id)
    ->delete();
    return redirect('elshow');
}
}
