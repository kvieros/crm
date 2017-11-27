<?php

namespace App\Http\Controllers\invoices;

use App\Invoice;
use Illuminate\Http\Request;
use Illuminate\Contracts\Auth\Guard;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use App\Customer;
use App\Transaction;
use App\Bank;
use App\Banks;
use App\Balance\Stripe;
use App\Items;
use App\Reccuring;

class Invoices extends Controller
{
    protected $auth;

    public function __construct(Guard $auth)
    {

        $this->auth = $auth;
        $this->middleware( 'auth');

    }

    public function getItem()
    {
        $items = Items::all();

        return view('invoices.items')->with('items',$items);

    }

    public function getInvoice()
    {
        $invoices = Invoice::All();

        return view('invoices.displayinvoices')->with('invoices',$invoices);

    }

    public function newInvoice(Request $request)
    {
        $id = $request->itemname;
        $item = Items::find($id);
        $customers = Customer::All();

        return view('invoices.newinvoice')->with('item',$item)
                                               ->with('customers', $customers);

    }
    public function addInvoice(Request $request , Invoice $invoice)
    {

        $customer = Customer::where('customer_id',$request->customer)->first();

        $customerfirstname = $customer->firstname;
        $customerlastname = $customer->lastname;

        $invoice->items_id = $request->itemid;
        $invoice->customer_id=$customer->customer_id;

        $rand = rand(1, 500);
        $invoice->invoicenumber = "INV ".$rand;

        $invoice->account = $customerfirstname ." ". $customerlastname;
        $quantity = $request->quantity;
        $price = $request->price;
        $discount = $request->discount;
        $tax = $request->tax;
        $invoice->amount = ($quantity*$price) - $discount;

        $invoice->duedate = $request->duedate;
        $invoice->status = $request->status;
        $invoice->type = "Onetime";

        $invoice->save();

        $invoices = Invoice::All();

        return view('invoices.displayinvoices')->with('invoices',$invoices);

    }
	
	public function getReccuringInvoices()
    {
		//$item = Items::find(1)->invoices;
        $invoices = Reccuring::All();

        return view('invoices.reccuringinvoices')->with('invoices',$invoices);

    }
}
