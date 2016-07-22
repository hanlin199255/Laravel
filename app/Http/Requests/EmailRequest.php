<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class EmailRequest extends Request
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
            'email'=>'required|email'
        ];
    }


    public function messages()
    {
        return [
            'email.required'=>'填写邮箱才可以哟',
            'email.email'=>'我才不信你输入的是邮箱！'
        ];
    }
}
