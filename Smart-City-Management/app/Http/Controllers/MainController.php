<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;;
use App\Models\Customer;


class MainController extends Controller
{
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
            'email'=>'required|unique:customers',  //when there is no data checking uique could generate error
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
            'password'=>'required'
        ]);

        $customerinfo= Customer::where('c_email','=', $request->email)->first();
        if(!$customerinfo){
            return back()->with('fail','Enter a valid email address');
        }
        else{
            //checking pass
            if(Hash::check($request->password, $customerinfo->c_password)){
                $request->session()->put('loggeduser',$customerinfo->c_id);
                return redirect('customer/homepage');
            }
            else{
                return back()->with('fail','Incorrect Password');
            }
        }

    }
}
