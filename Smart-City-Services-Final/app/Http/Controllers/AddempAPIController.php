<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\Customer;
use App\Models\el_emp;
use App\Models\pl_emp;
use App\Models\cl_emp;
use Illuminate\Support\Str;
use DateTime;
class AddempAPIController extends Controller
{
    //
    public function  addemp(Request $req){

        if($req->addtype == 'el_emp'){



            $el= new el_emp;
            $el->el_emp_name = $req->aname;
            $el->el_emp_email = $req->email;
            $el->el_emp_phone = $req->phone;
            $el->el_emp_dob = $req->dob;
            $el->el_emp_address = $req->address;
            $el->el_emp_password =$req->password;
            $save=$el->save();

            if($save){
                return back()->with('success','One Electrician Employee has added');
            }
            else{
                return back()->with('fail','something went wrong, try again later');
            }
        }
        if($req->addtype == 'cl_emp')
        {
         $cl= new cl_emp;
         $cl->cl_emp_name = $req->aname;
         $cl->cl_emp_email = $req->email;
         $cl->cl_emp_phone = $req->phone;
         $cl->cl_emp_dob = $req->dob;
         $cl->cl_emp_address = $req->address;
         $cl->cl_emp_password = $req->password;
         $save=$cl->save();

         if($save){
             return back()->with('success','One Cleaner Employee has added');
         }
         else{
             return back()->with('fail','something went wrong, try again later');
         }
        }


         if($req->addtype == 'pl_emp')
        {
         $pl= new pl_emp;
         $pl->pl_emp_name = $req->aname;
         $pl->pl_emp_email = $req->email;
         $pl->pl_emp_phone = $req->phone;
         $pl->pl_emp_dob = $req->dob;
         $pl->pl_emp_address = $req->address;
         $pl->pl_emp_password = $req->password;
         $save=$pl->save();

         if($save){
             return back()->with('success','One Plumber Employee has added');
         }
         else{
             return back()->with('fail','something went wrong, try again later');
         }
        }
        return "No user found";

    }


}
