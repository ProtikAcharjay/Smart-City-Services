<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;;
use App\Models\Customer;
use App\Models\Admin;
use Illuminate\Support\Facades\DB;
use App\Models\cl_emp;
use App\Models\pl_emp;
use App\Models\el_emp;


class MainController extends Controller
{
    function welcome(){
        return view('welcome');
    }
    function login(){
        return view('auth.login');
    }
    function register(){
        return view('auth.register');
    }
    function registered(Request $request){
        // return $request-> input();
        // validation
        $request->validate([
            'name'=>'required',
            'email'=>'required',  //when there is no data checking uique could generate error
            'phone'=>'required',
            'dob'=>'required',
            'address'=>'required',
            'password'=>'required'
        ]);

        // registering in database
        $customer= new Customer;
        $customer->c_name = $request->name;
        $customer->c_email = $request->email;
        $customer->c_phone = $request->phone;
        $customer->c_dob = $request->dob;
        $customer->c_address = $request->address;
        $customer->c_password = Hash::make($request->password);
        $save=$customer->save();

        if($save){
            return back()->with('success','Registered successfully, now you can login');
        }
        else{
            return back()->with('fail','something went wrong, try again later');
        }

    }

    function loggedin(Request $request){
        // return $request-> input();
        // validation
        $request->validate([
            'email'=>'required',
            'password'=>'required',
            'logintype' => 'required'
        ]);

//customer login start
if($request->logintype == 'Customer'){

        $customerinfo= Customer::where('c_email','=', $request->email)->first();
        if(!$customerinfo){
            return back()->with('fail','Enter a valid email address');
        }
        else{
            //checking pass

            $customerinfo= Customer::where('c_password','=', $request->password)->first();
            if($customerinfo){
                $request->session()->put('loggeduser',$customerinfo->c_id);
                return redirect('customer/homepage');
            }
            else{
                return back()->with('fail','Incorrect Password');
            }
        }

    }    //customer login end

    //admin login start
    if($request->logintype == 'Admin'){

        $admininfo= Admin::where('admin_email','=', $request->email)->first();
        if(!$admininfo){
            return back()->with('fail','Enter a valid email address');
        }
        else{
            //checking pass
            $admininfo= Admin::where('admin_password','=', $request->password)->first();
            if($admininfo){
                $request->session()->put('loggeduser',$admininfo->admin_id);
                return redirect('admin/addemPage');
            }
            else{
                return back()->with('fail','Incorrect Password');
            }
        }

    }
    //admin login end
    //Electrician Employee login start
if($request->logintype == 'Elemp'){

    $elempinfo= el_emp::where('el_emp_email','=', $request->email)->first();
    if(!$elempinfo){
        return back()->with('fail','Enter a valid email address');
    }
    else{
        //checking pass
        if(Hash::check($request->password, $elempinfo->el_emp_password)){
            $request->session()->put('loggeduser',$elempinfo->el_emp_id);
            return redirect('elemp/homepage'); //need to change later
        }
        else{
            return back()->with('fail','Incorrect Password');
        }
    }

}    //Electrician Employee login end
    //Cleaner Employee login start
if($request->logintype == 'Clemp'){

    $clempinfo= cl_emp::where('cl_emp_email','=', $request->email)->first();
    if(!$clempinfo){
        return back()->with('fail','Enter a valid email address');
    }
    else{
        //checking pass
        if(Hash::check($request->password, $clempinfo->cl_emp_password)){
            $request->session()->put('loggeduser',$clempinfo->cl_emp_id);
            return redirect('clemp/homepage'); //need to change later
        }
        else{
            return back()->with('fail','Incorrect Password');
        }
    }

}    //Cleaner Employee login end
    //Plumber Employee login start
if($request->logintype == 'Plemp'){

    $plempinfo= pl_emp::where('pl_emp_email','=', $request->email)->first();
    if(!$plempinfo){
        return back()->with('fail','Enter a valid email address');
    }
    else{
        //checking pass
        if(Hash::check($request->password, $plempinfo->pl_emp_password)){
            $request->session()->put('loggeduser',$plempinfo->pl_emp_id);
            return redirect('plemp/homepage'); //need to change later
        }
        else{
            return back()->with('fail','Incorrect Password');
        }
    }

}    //Plumber Employee login end
}



    function adminhommepage(){
        $data=['loggeduserinfo'=> Admin::where('admin_id' , '=', session('loggeduser'))->first()];
        return view('admin.homepage',$data);
    }
    // function elemphome(){
    //     $data=['loggeduserinfo'=> el_emp::where('el_emp_id' , '=', session('loggeduser'))->first()];
    //     return view('employee.elemphome',$data);
    // }
    // function clemphome(){
    //     $data=['loggeduserinfo'=> cl_emp::where('cl_emp_id' , '=', session('loggeduser'))->first()];
    //     return view('employee.clemphome',$data);
    // }
    // function plemphome(){
    //     $data=['loggeduserinfo'=> pl_emp::where('pl_emp_id' , '=', session('loggeduser'))->first()];
    //     return view('employee.plemphome',$data);
    // }

    function logout(){
        if(session()->has('loggeduser')){
            session()-> pull('loggeduser');
            return redirect('/auth/login');
        }

    }
}
