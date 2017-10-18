<?php


namespace App\Balance;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
class Stripe {

   // public $key;

    public function __construct()
    {

       // $this->key = $key;

    }

    public function getBalance(){

        $path = File::get('C:xampp/htdocs/crm/app/storage/json/balances.json');
        $balance = json_decode($path, true);
        return $balance;
    }

}