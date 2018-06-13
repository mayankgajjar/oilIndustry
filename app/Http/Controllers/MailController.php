<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Mail;


class MailController extends Controller
{
    public function index()
    {   
        $info = DB::table('contactinfos')->where('id', '=', 1)->first();
        return view('client.mail',compact('info'));
    }
    
     public function sendmail(Request $request)
    {
        $this->validate($request, [
            'Name' => 'required',
            'Email' => 'required',
            'Subject' => 'required',
            'Message' => 'required',
        ]);
         
        $name = $request->Name;
        $femail = $request->Email;
        $subject = $request->Subject;
        $msg = $request->Message;
         
        Mail::send('layouts.emails.inquery', array('name' => $name, 'email' => $femail, 'msg' => $msg, 'subject' => $subject), function($message)
        {
            $message->to('mga@narola.email', 'Mayank')->subject('Inquery in oil industry');
        });
        echo 'Email Send';
        
    }

  

   
}


