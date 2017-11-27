<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


Route::get('/', function () {

    return view('index');
});
//Service for balances
Route::get('/balance', function () {
    //call the service container
    $balance = App::make('App\Balance\Stripe');
    $balance = $balance->getBalance();

    return view('transactions.balance' , compact('balance'));
    //dd($balance);
});

//Authendicate user routes
Route::get('/main', 'AuthenticationUser@getMain');
Route::get('/login','AuthenticationUser@getLogin');
Route::get('/register', 'AuthenticationUser@getRegister');
Route::Post('/login','AuthenticationUser@postLogin');
Route::post('/register', 'AuthenticationUser@postRegister');
Route::get('/logout', 'AuthenticationUser@getLogout');

//Customer routes
Route::get('/addcustomer', 'customers\Customers@addCustomer');
Route::post('/addcustomer', 'customers\Customers@postAddCustomer');
Route::get('/customerlist', 'customers\Customers@customerList');
Route::post('/customerlist', 'customers\Customers@deleteCustomer');
Route::post('/updatecustomer', 'customers\Customers@updateCustomer');

//Transaction routes
Route::get('/newdeposit', 'transactions\Transactions@addDeposit');
Route::post('/newdeposit', 'transactions\Transactions@postAddDeposit');
Route::get('/newexpense', 'transactions\Transactions@addExpense');
Route::post('/newexpense', 'transactions\Transactions@postAddExpense');
Route::get('/newtransfer', 'transactions\Transactions@addTransfer');
Route::post('/newtransfer', 'transactions\Transactions@postAddTransfer');
Route::get('/viewtransfer', 'transactions\Transactions@viewTransfer');
Route::get('/viewtransactions', 'transactions\Transactions@viewTransactions');

//Invoices
Route::get('/items', 'invoices\Invoices@getItem');
Route::post('/newinvoice', 'invoices\Invoices@newInvoice');
Route::post('/addinvoice', 'invoices\Invoices@addInvoice');
Route::get('/invoices', 'invoices\Invoices@getInvoice');
Route::get('/reccuringinvoices', 'invoices\Invoices@getReccuringInvoices');

//Tools
Route::get('/sendemail', 'email\SendEmail@getSendEmail');
Route::post('/sendemail', 'email\SendEmail@postSendEmail');