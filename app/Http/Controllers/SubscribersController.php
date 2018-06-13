<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Subscribers;
use Illuminate\Support\Facades\Mail;

class SubscribersController extends Controller
{
    public function index() {
        return view('admin.subscribers.index');
    }
    
    /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function create()
    {
        return view('admin.subscribers.create');
    }
    
    /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function send(Request $request)
    {
        $msg = $request->get('template');
        $subscribers =  Subscribers::all()->toArray();
        foreach ($subscribers as $sub){
            $email_address =  $sub['email'];
            Mail::send('layouts.subscribers.subscribers', array('msg' => $msg), function($message) use ($email_address)
            {
                $message->to($email_address)->subject('Newsletter in oil industry');
            });
        }
        return redirect('/subscribers/add')->with('message', 'Email Send successful!');
    }
}
