<?php

namespace App\Http\Controllers\customers;

use App\Customer;
use Illuminate\Http\Request;
use Illuminate\Contracts\Auth\Guard;
use App\Http\Requests;
use App\Http\Requests\CustomerRequest;
use App\Http\Controllers\Controller;
use App\User;
use App\Transaction;
use App\Bank;

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

        /*$destinationPath = public_path('/image');

        $image = $request->file('fileToUpload');

        $image->move($destinationPath, $image);*/

        return redirect('customerlist');
    }
    public function customerList(Request $request){

        $customers = Customer::all();

        return view('customers.customerlist')->with('customers', $customers);

    }
    public function deleteCustomer(Request $request){

        if($request->ajax()){

            $customer_id = $request->get('id');
            $customer_id = (int)$customer_id;

            $bank = Bank::where('customer_id', $customer_id);
            $bank->delete();

            $transaction= Transaction::where('customer_id', $customer_id);
            $transaction->delete();

            $customers = Customer::where('customer_id', $customer_id);
            $customers->delete();
        }
        return redirect('customerlist');
    }
    public function updateCustomer(Request $request){

        if($request->ajax()){

            $this->validate($request, [
             'firstname' => "required|max:255|min:1",
             'lastname' =>"required|max:255|min:1",
             'email' => "required|email",
             'mobile' => "required|max:255|min:10",
             'address' => "required|max:255|min:1",
             'customertype' => "required|max:255|min:3",
             ]);

            $customer_customer = $request->get('customer');
            $customer_id = (int)$customer_customer;

            $customer_firstname = $request->get('firstname');
            $customer_lastname = $request->get('lastname');
            $customer_email = $request->get('email');
            $customer_mobile = $request->get('mobile');
            $customer_address = $request->get('address');
            $customer_customertype = $request->get('customertype');

            Customer::where('customer_id', $customer_id)->update([ 'firstname' => $customer_firstname, 'lastname' =>  $customer_lastname, 'email' => $customer_email, 'mobile' => $customer_mobile, 'address' => $customer_address, 'customertype' => $customer_customertype ]);

        }

    }
}
