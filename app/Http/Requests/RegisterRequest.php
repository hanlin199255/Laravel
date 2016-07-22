<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class RegisterRequest extends Request
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
            'username'=>'required|alpha_dash|between:4,15',
            'password' =>'required|regex:/\S{6,18}/',//正则
            'repassword' => 'same:password',
            'email'=>'required|email',
            'agreement'=>'required'
            
        ];
    }

    public function messages()
    {
        return [
            'username.required'=>'账号不能为空！',
             'repassword.same'=>'两次密码不一致！',
            'password.required'=>'密码不能为空！',
//            'repassword.required'=>'密码不能为空！',
            'username.alpha_dash'=>'仅包含字母、数字、破折号（ - ）以及下划线（ _ ）',
            'username.between'=>'账号应在4-15位之间',
            'password.regex'=>'密码应在6-18位之间',
//            'repassword.confirmed'=>'两次密码不一致！',
            'email.required'=>'邮箱不能为空',
            'email.email'=> '必须是一个邮箱',
            'agreement.required'=>'您必须查看并接受协议'
        ];
    }
}
