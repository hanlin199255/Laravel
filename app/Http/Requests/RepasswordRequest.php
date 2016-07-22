<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class RepasswordRequest extends Request
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
            'password'=>'required',
            'newpassword' =>'required|regex:/\S{6,18}/',//正则
            'renewpassword' => 'required|same:newpassword'
        ];
    }

    public function messages()
    {
        return [
            'renewpassword.same'=>'两次密码不一致！',
            'password.required'=>'密码不能为空！',
            'newpassword.required'=>'密码不能为空！',
            'renewpassword.required'=>'密码不能为空！',
            'newpassword.regex'=>'密码应在6-18位之间'
        ];
    }
}
