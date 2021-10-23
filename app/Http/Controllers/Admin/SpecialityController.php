<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Specialty;
Use Session;

class SpecialityController extends Controller
{
     public function registered()
    {
        return view('admin.pages.forms.speciality-register');
    }  

     public function specialitytable(){
        $specialty= Specialty::get();

        return view('admin.pages.tables.speciality-table', compact('specialty'));
    }

    public function store(Request $request)
    {
        $specialty=new Specialty;

        $specialty->title=$request->input('title');
        $specialty->shortdescription=$request->input('shortdescription');
        $specialty->description=$request->input('description');
        $specialty->detaildescription=$request->input('detaildescription');
        $specialty->price=$request->input('price');
        $specialty->img=$request->input('img');
        $specialty->save();
        
        Session::flash('statuscode','success');
        return redirect('/speciality-table')->with('status', 'Speciality Pages Added Sucessfully');
    }

    public function show(Request $request, $id)
        {
        //     $about= About::findOrFail($id);
        //     return view('about')->with('about', $about);
        }

    public function registeredit(Request $request, $id)
    {
        $specialty= Specialty::findOrFail($id);

        Session::flash('statuscode','success');
        return view('admin.pages.forms.speciality-edit')->with('specialty', $specialty);
    }
    
    public function registerupdate(Request $request, $id)
    {
        $specialty= Specialty::find($id);

        $specialty->title=$request->input('title');
        $specialty->shortdescription=$request->input('shortdescription');
        $specialty->description=$request->input('description');
        $specialty->detaildescription=$request->input('detaildescription');
        $specialty->price=$request->input('price');
        $specialty->img=$request->input('img');
        $specialty->update();

        Session::flash('statuscode','success');
        return redirect('/speciality-table')->with('status', 'Your Data is Updated');
    }
    
    public function registerdelete(Request $request, $id)
    {
        $specialty= Specialty::findOrFail($id);
        $specialty->delete();

        Session::flash('statuscode','error');
        return redirect('/speciality-table')->with('status', 'Your Data is Deleted');
    }
}
