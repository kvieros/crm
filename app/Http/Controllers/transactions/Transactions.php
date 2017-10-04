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
        $transactions = Transaction::where('transactiontype', 'deposit')->get();

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

       // $customer = Customer::where('customer_id', 'Vieros')->firstOrFail(); vriskei monadiki egrafi

        $transaction->save();

        $customers = Customer::all();
        $transactions = Transaction::where('transactiontype', 'deposit')->get();

        return view('transactions.newdeposit')->with('customers', $customers)->with('transactions', $transactions);
    }

    public function addExpense(){

        $customers = Customer::all();
        $transactions = Transaction::where('transactiontype', 'expense')->get();

        return view('transactions.newexpense')->with('customers', $customers)->with('transactions', $transactions);

    }
    public function postAddExpense(Request $request, Transaction $transaction)
    {

        $transaction->accountfrom = $request->account;
        $transaction->date = $request->date;
        $transaction->description = $request->description;
        $transaction->amount = $request->amount;
        $transaction->customer_id = $request->customers;
        $transaction->transactiontype = 'expense';

        $transaction->save();

        $customers = Customer::all();
        $transactions = Transaction::where('transactiontype', 'expense')->get();

        return view('transactions.newexpense')->with('customers', $customers)->with('transactions', $transactions);
    }


    public function addTransfer(){

        $customers = Customer::all();
        $transactions = Transaction::where('transactiontype', 'transfer')->get();

        return view('transactions.newtransfer')->with('customers', $customers)->with('transactions', $transactions);

    }
    public function postAddTransfer(Request $request, Transaction $transaction)
    {

        $transaction->accountfrom = $request->accountfrom;
        $transaction->accountto = $request->accountto;
        $transaction->date = $request->date;
        $transaction->description = $request->description;
        $transaction->amount = $request->amount;
        $transaction->customer_id = $request->customers;
        $transaction->transactiontype = 'transfer';

        $transaction->save();

        $customers = Customer::all();
        $transactions = Transaction::where('transactiontype', 'transfer')->get();

        return view('transactions.newtransfer')->with('customers', $customers)->with('transactions', $transactions);
    }
    public function viewTransfer(){


        $transactions = Transaction::where('transactiontype', 'transfer')->get();

        return view('transactions.viewtransfer')->with('transactions', $transactions);

    }

    public function viewTransactions(){

        $transactions = Transaction::all();

        return view('transactions.viewtransactions')->with('transactions', $transactions);

    }

}
