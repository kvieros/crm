<?php

namespace App\Http\Controllers\invoices;

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

    public function newInvoice(Request $request)
    {
        $id = $request->itemname;

        $item = Items::find($id);

        return view('invoices.newinvoice')->with('item',$item);

    }
    public function addInvoice(Request $request)
    {
        $id = $request->itemname;

        $item = Items::find($id);

        return view('invoices.displayinvoices')->with('item',$item);

    }
}
