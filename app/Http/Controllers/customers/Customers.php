<?php

namespace App\Http\Controllers\customers;

use App\Customer;
use Illuminate\Http\Request;
use Illuminate\Contracts\Auth\Guard;
use App\Http\Requests;
use App\Http\Requests\CustomerRequest;
use App\Http\Controllers\Controller;
use App\User;

class Customers extends Controller
{
    protected $auth;

    public function __construct(Guard $auth)
    {

        $this->auth = $auth;

        $this->middleware( 'auth');

    }

    public function addCustomer(){

        return view('customers.addcustomer');

    }
    public function postAddCustomer(CustomerRequest $request, Customer $customer)
    {

        $customer->firstname=$request->firstname;
        $customer->lastname=$request->lastname;
        $customer->email=$request->email;
        $customer->mobile=$request->mobile;
        $customer->image=$request->fileToUpload;
        $customer->bankdetails=$request->bankdetails;
        $customer->passport=$request->passport;
        $customer->facebookid=$request->facebookid;
        $customer->dateofbirth=$request->dateofbirth;
        $customer->address=$request->address;
        $customer->customertype=$request->customertype;
        $customer->sex=$request->optionsRadios;
        $customer->status=$request->Radios;

        $customer->save();

        return redirect('customerlist');
    }
    public function customerList(){

        $customers = Customer::all();

        return view('customers.customerlist')->with('customers', $customers);

    }
    public function groups(){

        return view('customers.groups');

    }
}
