<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\Customer;
use App\Models\Token;
use Illuminate\Support\Str;
use DateTime;
class LoginAPIController extends Controller
{
    //
    public function  login(Request $req){
        // $admininfo= Admin::where('admin_email','=', $req->email)->first();
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
        return "No user found";

    }


}
