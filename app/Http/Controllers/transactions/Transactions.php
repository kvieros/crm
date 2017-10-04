<?php

namespace App\Http\Controllers\transactions;

use Illuminate\Http\Request;
use Illuminate\Contracts\Auth\Guard;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use App\Customer;
use App\Transaction;

class Transactions extends Controller
{
    protected $auth;

    public function __construct(Guard $auth)
    {

        $this->auth = $auth;

        $this->middleware( 'auth');

    }

    public function addDeposit(){

        $customers = Customer::all();
        $transactions = Transaction::all();
        return view('transactions.newdeposit')->with('customers', $customers)->with('transactions', $transactions);

    }
    public function postAddDeposit(Request $request, Transaction $transaction)
    {

        $transaction->accountfrom = $request->account;
        $transaction->date = $request->date;
        $transaction->description = $request->description;
        $transaction->amount = $request->amount;
        $transaction->customer_id = $request->customers;
        $transaction->transactiontype = 'deposit';

       // $customer = Customer::where('customer_id', 'Vieros')->firstOrFail();

        $transaction->save();

        $customers = Customer::all();
        $transactions = Transaction::all();
        return view('transactions.newdeposit')->with('customers', $customers)->with('transactions', $transactions);
    }

   /* public function addExpense(){

        return view('transactions.adddeposit');

    }
    public function postAddExpense(CustomerRequest $request, Customer $customer)
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

    public function viewExpense(Request $request){

        $customers = Customer::all();

        return view('customers.customerlist')->with('customers', $customers);

    }

    public function addTransfer(){

        return view('transactions.adddeposit');

    }
    public function postAddTransfer(CustomerRequest $request, Customer $customer)
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

    public function viewTransfer(Request $request){

        $customers = Customer::all();

        return view('customers.customerlist')->with('customers', $customers);

    }

    public function viewTransaction(Request $request){

        $customers = Customer::all();

        return view('customers.customerlist')->with('customers', $customers);

    }*/

}
