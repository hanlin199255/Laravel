<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\EmailRequest;
use DB;

class SubController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function postIndex(EmailRequest $request)
    {
        $email['sub_email'] = $request->input('email');
        if(DB::table('sub_email')->insert($email)){
            return back()->with("info",'订阅成功');
        } else {
            return back()->with("info",'订阅失败');
        }
    }

    
}
