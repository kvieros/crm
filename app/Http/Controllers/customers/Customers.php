<?php

namespace App\Http\Controllers\customers;

use Illuminate\Http\Request;
use Illuminate\Contracts\Auth\Guard;
use App\Http\Requests;
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
    public function customerList(){

        return view('customers.customerlist');

    }
    public function groups(){

        return view('customers.groups');

    }
}
