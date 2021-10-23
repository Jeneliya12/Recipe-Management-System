<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Salad;
use Session;

class SaladController extends Controller
{
    public function registered()
    {
        return view('admin.pages.forms.salad-register');
    }  

     public function saladtable(){
        $salad= Salad::get();

        return view('admin.pages.tables.salad-table', compact('salad'));
    }

    public function store(Request $request)
    {
        $salad=new Salad;
        $salad->title=$request->input('title');
        $salad->price=$request->input('price');
        $salad->shortdescription=$request->input('shortdescription');
        $salad->description=$request->input('description');
        $salad->detaildescription=$request->input('detaildescription');
        $salad->img=$request->input('img');
        
        $salad->save();
        
        Session::flash('statuscode','success');
        return redirect('/salad-table')->with('status', 'Salad Added Sucessfully');
    }

    public function show(Request $request, $id)
        {
        
        }

    public function registeredit(Request $request, $id)
    {
        $salad= Salad::findOrFail($id);

        Session::flash('statuscode','success');
        return view('admin.pages.forms.salad-edit')->with('salad', $salad);
    }
    
    public function registerupdate(Request $request, $id)
    {
        $salad= Salad::find($id);

        $salad->title=$request->input('title');
        $salad->shortdescription=$request->input('shortdescription');
        $salad->description=$request->input('description');
        $salad->detaildescription=$request->input('detaildescription');
        $salad->img=$request->input('img');
        $salad->update();

        Session::flash('statuscode','success');
        return redirect('/salad-table')->with('status', 'Your Data is Updated');
    }
    
    public function registerdelete(Request $request, $id)
    {
        $salad= Salad::findOrFail($id);
        $salad->delete();

        Session::flash('statuscode','error');
        return redirect('/salad-table')->with('status', 'Your Data is Deleted');
    }
}
