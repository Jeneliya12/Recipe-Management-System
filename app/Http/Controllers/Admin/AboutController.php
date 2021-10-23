<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\About;
use Session;

class AboutController extends Controller
{
    public function registered()
    {
        return view('admin.pages.forms.about-register');
    }  

     public function abouttable(){
        $about= About::get();

        return view('admin.pages.tables.about-table', compact('about'));
    }

    public function store(Request $request)
    {
        $about=new About;

        $about->title=$request->input('title');
        $about->shortdescription=$request->input('shortdescription');
        $about->description=$request->input('description');
        $about->detaildescription=$request->input('detaildescription');
        $about->img=$request->input('img');
        $about->save();
        
        Session::flash('statuscode','success');
        return redirect('/about-table')->with('status', 'About Pages Added Sucessfully');
    }

    public function show(Request $request, $id)
        {
        //     $about= About::findOrFail($id);
        //     return view('about')->with('about', $about);
        }

    public function registeredit(Request $request, $id)
    {
        $about= About::findOrFail($id);

        Session::flash('statuscode','success');
        return view('admin.pages.forms.about-edit')->with('about', $about);
    }
    
    public function registerupdate(Request $request, $id)
    {
        $about= About::find($id);

        $about->title=$request->input('title');
        $about->shortdescription=$request->input('shortdescription');
        $about->description=$request->input('description');
        $about->detaildescription=$request->input('detaildescription');
        $about->img=$request->input('img');
        $about->update();

        Session::flash('statuscode','success');
        return redirect('/about-table')->with('status', 'Your Data is Updated');
    }
    
    public function registerdelete(Request $request, $id)
    {
        $about= About::findOrFail($id);
        $about->delete();

        Session::flash('statuscode','error');
        return redirect('/about-table')->with('status', 'Your Data is Deleted');
    }
}
