<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class Customer extends Model implements AuthenticatableContract,
    AuthorizableContract,
    CanResetPasswordContract
{
    use Authenticatable, Authorizable, CanResetPassword;

    protected $table = 'customers';

    public function transaction(){

        return $this->hasMany('App\Transaction');
    }

    public function bank(){

        return $this->hasMany('App\Bank');
    }
    public function items(){

        return $this->hasMany( 'App\Items' );
    }
    public function invoices(){

        return $this->hasOne( 'App\Invoice' );
    }
}
