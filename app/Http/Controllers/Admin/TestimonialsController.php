<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Testimonials;
use Session;

class TestimonialsController extends Controller
{
	public function testimonials()
    {
        return view('admin.pages.forms.testimonials-register');
    }  

     public function testimonialstable(){
        $testimonials= Testimonials::get();

        return view('admin.pages.tables.testimonials-table', compact('testimonials'));
    }

    public function store(Request $request)
    {
        $testimonials=new Testimonials;

        $testimonials->name=$request->input('name');
        $testimonials->position=$request->input('position');
        $testimonials->description=$request->input('description');
        $testimonials->img=$request->input('img');
        $testimonials->save();
        
        Session::flash('statuscode','success');
        return redirect('/testimonials-table')->with('status', 'Testimonials Pages Added Sucessfully');
    }

    public function show(Request $request, $id)
        {
     
        }

    public function registeredit(Request $request, $id)
    {
        $testimonials= Testimonials::findOrFail($id);

        Session::flash('statuscode','success');
        return view('admin.pages.forms.testimonials-edit')->with('testimonials', $testimonials);
    }
    
    public function registerupdate(Request $request, $id)
    {
        $testimonials= Testimonials::find($id);

        $testimonials->name=$request->input('name');
        $testimonials->position=$request->input('position');
        $testimonials->description=$request->input('description');
        $testimonials->img=$request->input('img');
        $testimonials->update();

        Session::flash('statuscode','success');
        return redirect('/testimonials-table')->with('status', 'Your Data is Updated');
    }
    
    public function registerdelete(Request $request, $id)
    {
        $testimonials= Testimonials::findOrFail($id);
        $testimonials->delete();

        Session::flash('statuscode','error');
        return redirect('/testimonials-table')->with('status', 'Your Data is Deleted');
    }
}
