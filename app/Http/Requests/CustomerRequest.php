<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class CustomerRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'firstname' =>"required|max:255|min:1",
            'lastname' =>"required|max:255|min:1",
            'email' =>"required|email",
            'mobile' =>"required|max:255|min:10",
            'fileToUpload' =>"required",
            'bankdetails' =>"required|max:255",
            'passport' =>"required|max:255|min:1",
            'facebookid' =>"required|max:255|min:1",
            'dateofbirth' =>"required|date",
            'address' =>"required|max:255|min:1",
            'customertype' =>"required|max:255|min:3",
            'optionsRadios' =>"required|max:255|min:1",
            'Radios' =>"required|max:255|min:1"
        ];
    }
}
