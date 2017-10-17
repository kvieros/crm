<?php

namespace App\Http\Controllers\transactions;

use Illuminate\Http\Request;
use Illuminate\Contracts\Auth\Guard;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use App\Customer;
use App\Transaction;
use App\Bank;
use App\Banks;

class Transactions extends Controller
{
    protected $auth;

    public function __construct(Guard $auth)
    {

        $this->auth = $auth;
        $this->middleware( 'auth');

    }
    public function getBanks()
    {

        $banks = Banks::all();
        return $banks;

    }
    public function getCustomers()
    {

        $customers = Customer::all();
        return $customers;

    }
    public function getTransactions($transactiontype)
    {

        $transactions = Transaction::where('transactiontype', $transactiontype)->get();
        return $transactions;

    }
    public function addDeposit()
    {

        return view('transactions.newdeposit')
            ->with('customers', $this->getCustomers())
            ->with('transactions', $this->getTransactions('deposit'))
            ->with('banks',$this->getBanks());

    }
    public function postAddDeposit(Request $request, Transaction $transaction, Bank $bank)
    {

        $transaction->accountfrom = $request->account;
        $transaction->date = $request->date;
        $transaction->description = $request->description;
        $transaction->credit = $request->amount;
        $transaction->transactiontype =  'deposit';
        $transaction->customer_id = $request->customers;

        $transaction->save();

        $transactionbank = Transaction::orderBy('created_at', 'desc')->first();

        $bank->account = $request->amount;
        $bank->customer_id = $request->customers;
        $bank->transaction_id = $transactionbank->transaction_id;

        $bank->save();

        $totalaccount = Bank::where('customer_id',$request->customers)->first();;

        $totalaccount = $totalaccount->account + $request->amount;

        Bank::where('customer_id', $request->customers)
            ->update(['account' => $totalaccount]);;

        return view('transactions.newdeposit')
            ->with('customers', $this->getCustomers())
            ->with('transactions', $this->getTransactions('deposit'))
            ->with('banks',$this->getBanks());
    }

    public function addExpense()
    {

        return view('transactions.newexpense')
            ->with('customers', $this->getCustomers())
            ->with('transactions', $this->getTransactions('expense'))
            ->with('banks',$this->getBanks());

    }

    public function postAddExpense(Request $request,  Transaction $transaction, Bank $bank)
    {

        $transaction->accountfrom = $request->account;
        $transaction->date = $request->date;
        $transaction->description = $request->description;
        $transaction->debit = $request->amount;
        $transaction->transactiontype = 'expense';
        $transaction->customer_id = $request->customers;

        $transaction->save();

        $transactionbank = Transaction::orderBy('created_at', 'desc')->first();

        $bank->account = $request->amount;
        $bank->customer_id = $request->customers;
        $bank->transaction_id = $transactionbank->transaction_id;

        $bank->save();

        $totalaccount = Bank::where('customer_id',$request->customers)->first();;

        $totalaccount = $totalaccount->account - $request->amount;

        Bank::where('customer_id', $request->customers)
               ->update(['account' => $totalaccount]);;

        return view('transactions.newexpense')
            ->with('customers', $this->getCustomers())
            ->with('transactions', $this->getTransactions('expense'))
            ->with('banks',$this->getBanks());
    }

    public function addTransfer()
    {

        return view('transactions.newtransfer')
            ->with('customers', $this->getCustomers())
            ->with('transactions', $this->getTransactions('transfer'))
            ->with('banks',$this->getBanks());

    }

    public function postAddTransfer(Request $request, Transaction $transaction)
    {

        $transaction->accountfrom = $request->accountfrom;
        $transaction->accountto = $request->accountto;
        $transaction->date = $request->date;
        $transaction->description = $request->description;
        $transaction->credit = $request->amount;
        $transaction->transactiontype =  'transfer';
        $transaction->customer_id = $request->customers;

        $transaction->save();

        return view('transactions.newtransfer')
            ->with('customers', $this->getCustomers())
            ->with('transactions', $this->getTransactions('transfer'))
            ->with('banks',$this->getBanks());
    }

    public function viewTransfer()
    {

        return view('transactions.viewtransfer')->with('transactions', $this->getTransactions('transfer'));

    }

    public function viewTransactions()
    {

        $transactions = Transaction::all();

        return view('transactions.viewtransactions')->with('transactions', $transactions);

    }

}
