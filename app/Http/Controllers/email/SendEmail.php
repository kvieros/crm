<?php

namespace App\Http\Controllers\email;

use Illuminate\Http\Request;
use Illuminate\Contracts\Auth\Guard;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use App\Customer;
use App\Transaction;
use App\Bank;
use App\Banks;
use Validator;
use Mail;

class SendEmail extends Controller
{
    protected $auth;

    public function __construct(Guard $auth)
    {

        $this->auth = $auth;
        $this->middleware( 'auth');

    }

    public function getSendEmail()
    {
        return view('sendemail.getsendemail');

    }
    public function postSendEmail(Request $request)
    {
           $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required'
            ]);

            if ($validator->fails())
            {
            return $validator->errors()->all();
            }

            $name = $request->input('name');
            $email = $request->input('email');
            $subject = $request->input('subject');
            $message = $request->input('message');

            $data = ['name' => $name, 'email' => $email, 'subject' => $subject, 'message' => $message];

            Mail::send('sendemail.sendemail', ['data'=>$data], function ($mail) use ($data) {

                $mail->from($data['email'] , 'Your Application');

                $mail->to('kvieros@hotmail.com', $data['email'])->subject($data['subject']); });


    }
}
