<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\Customer;
use App\Models\el_emp;
use App\Models\Token;
use Illuminate\Support\Str;
use DateTime;
class LoginAPIController extends Controller
{
    //
    public function  login(Request $req){
        // $admininfo= Admin::where('admin_email','=', $req->email)->first();
        if($req->logintype == 'admin'){
            $user = Admin::where('admin_email',$req->email)->where('admin_password',$req->password)->first();
            // dd($user);
            // return $user;
            // return "go to next page";
            if($user){
                return "adminloggedin";
                // $api_token = Str::random(64);
                // $token = new Token();
                // $token->userid = $user->admin_id;
                // $token->token = $api_token;
                // $token->created_at = new DateTime();
                // $token->save();
                // return $token;

                // $req->session()->put('loggeduser',$user->admin_id);

            }
         } //admin finish
        else if($req->logintype == 'employee'){
            $user = el_emp::where('el_emp_email',$req->email)->where('el_emp_password',$req->password)->first();
            // dd($user);
            // return $user;
            // return "go to next page";
            if($user){
                return "emploggedin";
                // $api_token = Str::random(64);
                // $token = new Token();
                // $token->userid = $user->admin_id;
                // $token->token = $api_token;
                // $token->created_at = new DateTime();
                // $token->save();
                // return $token;

                // $req->session()->put('loggeduser',$user->admin_id);

            } //admin finish

        }
        else if($req->logintype == 'customer'){
            $user = Customer::where('c_email',$req->email)->where('c_password',$req->password)->first();
            // dd($user);
            // return $user;
            // return "go to next page";
            if($user){
                return "customerloggedin";
                // $api_token = Str::random(64);
                // $token = new Token();
                // $token->userid = $user->admin_id;
                // $token->token = $api_token;
                // $token->created_at = new DateTime();
                // $token->save();
                // return $token;

                // $req->session()->put('loggeduser',$user->admin_id);

            } //admin finish

        }
        else{
            return "No user found";
        }



    }


}
