<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use App\Subscribers;
use App\News;

class AjaxController extends Controller
{
    public function subscribersstore(Request $request)  
    {
        
        $emailcount = Subscribers::where('email', $request->get('email'))->count();
        if($emailcount == 0){
            $subscribers = new Subscribers([
              'email' => $request->get('email'),
            ]);
            $subscribers->save();
            return 'You are successful subscribers';
        } else {
            return 'Email address is already in use';
        }
    }
    
    public function shownews(Request $request)
    {
        $data = Input::all();
        $nid = $data['newsid'];
        $news = News::findOrFail($nid)->toArray();
        
        echo view('client.shownews', compact('news'));
        
    }
}
