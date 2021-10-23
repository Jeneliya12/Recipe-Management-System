<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\TestMail;
use Session;
class MailController extends Controller
{
  function send(Request $request)
    {
     $this->validate($request, [
      'name'     => 'required',
      'email'    => 'required|email',
      'phone'    => 'required',
      'address'  => 'required',
      'message'  => 'required',
      'number'   => 'required',
     ]);

        $data = array(
            'name'     =>  $request->name,
            'email'    =>  $request->email,
            'phone'    =>  $request->phone,
            'address'  =>  $request->address,
            'message'  =>  $request->message,
            'number'   =>  $request->number,
        );

      Mail::to('jaiswallove2121@gmail.com')->send(new TestMail($data));

     Session::flash('statuscode','success');
     return back()->with('status', 'Your booking request was sent. We will call back or send an Email to confirm your reservation. Thank you!'); 
    }
}

