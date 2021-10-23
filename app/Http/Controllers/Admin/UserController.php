<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Session;

class UserController extends Controller
{
   public function registered()
    {
        $users= User::all();

        return view('admin.pages.forms.register')->with('users', $users);
    }  

     public function userregistered()
    {
 
        return view('admin.pages.forms.user-register');
    }  

    //  public function store(Request $request)
    // {
    //     $users=new User;

    //     $user->name=$request->input('name');
    //     $user->phone=$request->input('phone');
    //     $user->email=$request->input('email');
    //     $user->password=$request->input('password');
    //     $user->password_confirmation=$request->input('password_confirmation');
    //     $user->save();
        
    //     Session::flash('statuscode','success');
    //     return redirect('/user-table')->with('status', 'User Added Sucessfully');
    // }

    public function registeredit(Request $request, $id)
    {
        $users= User::findOrFail($id);
        
        Session::flash('statuscode','success');
        return view('admin.pages.forms.register-edit')->with('users', $users);
    }
    
    public function registerupdate(Request $request, $id)
    {
        $users= User::find($id);
        $users->name=$request->input('username');
        $users->usertype=$request->input('usertype');
        $users->update();

        Session::flash('statuscode','success');
        return redirect('/role-register')->with('status', 'Your Data is Updated');
    }
    
    public function registerdelete(Request $request, $id)
    {
        $users= User::findOrFail($id);
        $users->delete();

        Session::flash('statuscode','error');
        return redirect('/role-register')->with('status', 'Your Data is Deleted');
    }

    public function changestatus($id){
        $users= User::find($id);
        $users->is_active=!$users->is_active;
        if ($users->save()){
            return redirect('/role-register');
        }
        else
        {
            return redirect(route('changestatus'));
        }    

    }
}
