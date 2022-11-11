<?php

namespace App\Http\Controllers;

use App\Models\Reqservice;
use App\Http\Requests\StoreReqserviceRequest;
use App\Http\Requests\UpdateReqserviceRequest;
use App\Models\Customer;
use Illuminate\Http\Request;

class ReqserviceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function homepage(){
        $data=['loggeduserinfo'=> Customer::where('c_id' , '=', session('loggeduser'))->first()];
        return view('customer.homepage',$data);
    }
    function reqservice(Request $request){
        // return $request-> input();
        // validation
        $request->validate([
            'reqtype'=>'required',
            'reqdate'=>'required',
            'reqaddress'=>'required',
        ]);
    //    return $request->input();

        $data=Customer::where('c_id' , '=', session('loggeduser'))->first();
        // return $data->c_id;
        //registering in database
        $reqservice= new Reqservice;
        $reqservice->c_id = $data->c_id;
        $reqservice->c_email = $data->c_email;
        $reqservice->c_name = $data->c_name;
        $reqservice->req_service = $request->reqtype;
        $reqservice->req_time = $request->reqdate;
        $reqservice->req_address = $request->reqaddress;

        $save=$reqservice->save();

        if($save){
            return back()->with('success','Requested successfully, Please Wait till assigning the service');
        }
        else{
            return back()->with('fail','something went wrong, try again later');
        }

    }
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreReqserviceRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreReqserviceRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Reqservice  $reqservice
     * @return \Illuminate\Http\Response
     */
    public function show(Reqservice $reqservice)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Reqservice  $reqservice
     * @return \Illuminate\Http\Response
     */
    public function edit(Reqservice $reqservice)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateReqserviceRequest  $request
     * @param  \App\Models\Reqservice  $reqservice
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateReqserviceRequest $request, Reqservice $reqservice)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Reqservice  $reqservice
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reqservice $reqservice)
    {
        //
    }
}
