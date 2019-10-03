<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Mail\SendMail;
class mailController extends Controller
{
    public function send(request $request){
        //Mail::send(new SendMail());
        //$ทฟรส=explode(",",$bookroomID);
        //dd($request->all());
        $mails = explode(",",$request->to);
        //dd($mails);
        foreach ($mails as $mail) {
            try {
                Mail::to($mail)->send(new SendMail());
            } catch(\Exception $e){
                \Log::info("Exception:");
                \Log::info($mail);
                \Log::info($e);
            }
        }
    }

    public function email(){
        return view('email');
    }
}
