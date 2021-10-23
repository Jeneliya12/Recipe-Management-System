<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Special;
Use Session;

class SpecialController extends Controller
{
     public function registered()
    {
        return view('admin.pages.forms.specials-register');
    }  

     public function specialstable(){
        $specials= Special::get();

        return view('admin.pages.tables.specials-table', compact('specials'));
    }

    public function store(Request $request)
    {
        $specials=new Special;

        $specials->title=$request->input('title');
        $specials->shortdescription=$request->input('shortdescription');
        $specials->description=$request->input('description');
        $specials->img=$request->input('img');
        $specials->img2=$request->input('img2');
        $specials->img3=$request->input('img3');
        $specials->img4=$request->input('img4');
        $specials->img5=$request->input('img5');
        $specials->save();
        
        Session::flash('statuscode','success');
        return redirect('/specials-table')->with('status', 'Special Pages Added Sucessfully');
    }

    public function show(Request $request, $id)
        {
        //     $about= About::findOrFail($id);
        //     return view('about')->with('about', $about);
        }

    public function registeredit(Request $request, $id)
    {
        $specials= Special::findOrFail($id);

        Session::flash('statuscode','success');
        return view('admin.pages.forms.specials-edit')->with('specials', $specials);
    }
    
    public function registerupdate(Request $request, $id)
    {
        $specials= Special::find($id);

        $specials->title=$request->input('title');
        $specials->shortdescription=$request->input('shortdescription');
        $specials->description=$request->input('description');
        $specials->img=$request->input('img');
        $specials->img2=$request->input('img2');
        $specials->img3=$request->input('img3');
        $specials->img4=$request->input('img4');
        $specials->img5=$request->input('img5');
        $specials->update();

        Session::flash('statuscode','success');
        return redirect('/specials-table')->with('status', 'Your Data is Updated');
    }
    
    public function registerdelete(Request $request, $id)
    {
        $specials= Special::findOrFail($id);
        $specials->delete();

        Session::flash('statuscode','error');
        return redirect('/specials-table')->with('status', 'Your Data is Deleted');
    }
}
