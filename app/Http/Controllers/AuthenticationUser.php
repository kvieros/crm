<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Auth\Guard;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Config;
class AuthenticationUser extends Controller
{

    protected $auth;

    public function __construct(Guard $auth)
    {

        $this->auth = $auth;

        $this->middleware( 'auth',[
            'except' => [
            'getLogin',
            'getRegister',
            'postLogin',
            'postRegister']
        ]);

    }

    public function getLogin(){

        return view('authenticationuser.login');

    }

    public function getRegister(){

        return view('authenticationuser.register');

    }

    public function postLogin(Request $request)
    {

        $users = User::all();

        foreach($users as $user){

            if($user->username == $request->username && Hash::check('$request->password', $user->password)){

              $this->auth->login($user);
             //   $value = session('user', $user->username);
               // Config::set('vars.username', $user->username);
              //  config(['vars.username' => $user->username]);
                Config::set('vars.username', $user->username);
              return redirect('main')->with('user', $user->username);

            }
        }
        return redirect('login');
    }

    public function postRegister(Request $request, User $users)
    {

        $this->validate(request(), [
            'name' =>"required",
            'email' =>"required",
            'username' =>"required",
            'password' =>"required"
        ]);
        $users->name=$request->name;
        $users->email=$request->email;
        $users->username=$request->username;
        $users->password= bcrypt('$request->password');

        $users->save();

        return view('authenticationuser.login');
    }

    public function getMain(){

        return view('main');

    }

    public function getLogout()
    {
        $this->auth->logout();
        return redirect("login");
    }

}
