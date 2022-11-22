<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Http\Requests\StoreCustomerRequest;
use App\Http\Requests\UpdateCustomerRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;


class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function customer_details(Request $request){

        $search=$request->search ?? "";
        if($search!=""){

            $customers= Customer::where('c_name','LIKE', "%$search%")->get();

        }else{

            $customers=Customer::paginate(7);
        }
    $data=compact('customers','search');
        return view('customer.details')->with($data);
    }

    function APIcustomer(){

        return Customer::all();
    }
    function APIcustomerpost(){

        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'phone'=>'required',
            'dob'=>'required',
            'address'=>'required',
            'password'=>'required'
        ]);

        $customer= new Customer;
        $customer->c_name = $request->name;
        $customer->c_email = $request->email;
        $customer->c_phone = $request->phone;
        $customer->c_dob = $request->dob;
        $customer->c_address = $request->address;
        $customer->c_password = Hash::make($request->password);
        $save=$customer->save();
        return $request;

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
     * @param  \App\Http\Requests\StoreCustomerRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCustomerRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function show(Customer $customer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function edit(Customer $customer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCustomerRequest  $request
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCustomerRequest $request, Customer $customer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Customer $customer)
    {
        //

    }
}
