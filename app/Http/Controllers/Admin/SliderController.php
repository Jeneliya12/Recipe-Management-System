<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Slider;
use Session;

class SliderController extends Controller
{
    public function registered()
    {
        return view('admin.pages.forms.slider-register');
    }  

     public function slidertable(){
        $slider= Slider::get();

        return view('admin.pages.tables.slider-table', compact('slider'));
    }

    public function store(Request $request)
    {
        $slider=new slider;

        $slider->activetitle=$request->input('activetitle');
        $slider->activedescription=$request->input('activedescription');
        $slider->img=$request->input('img');
        $slider->secondtitle=$request->input('secondtitle');
        $slider->seconddescription=$request->input('seconddescription');
        $slider->secondimg=$request->input('secondimg');
        $slider->thirdtitle=$request->input('thirdtitle');
        $slider->thirddescription=$request->input('thirdescription');
        $slider->thirdimg=$request->input('thirdimg');
        $slider->save();
        
        Session::flash('statuscode','success');
        return redirect('/slider-table')->with('status', 'Slider Added Sucessfully'); 
    }

    public function show(Request $request, $id)
        {
     
        }

    public function registeredit(Request $request, $id)
    {
        $slider= Slider::findOrFail($id);

        Session::flash('statuscode','success');
        return view('admin.pages.forms.slider-edit')->with('slider', $slider);
    }
    
    public function registerupdate(Request $request, $id)
    {
        $slider= Slider::find($id);

        $slider->activetitle=$request->input('activetitle');
        $slider->activedescription=$request->input('activedescription');
        $slider->img=$request->input('img');
        $slider->secondtitle=$request->input('secondtitle');
        $slider->seconddescription=$request->input('seconddescription');
        $slider->secondimg=$request->input('secondimg');
        $slider->thirdtitle=$request->input('thirdtitle');
        $slider->thirddescription=$request->input('sthirdescription');
        $slider->thirdimg=$request->input('thirdimg');
        $slider->update();

        Session::flash('statuscode','success');
        return redirect('/slider-table')->with('status', 'Your Data is Updated');
    }
    
    public function registerdelete(Request $request, $id)
    {
        $slider= Slider::findOrFail($id);
        $slider->delete();

        Session::flash('statuscode','error');
        return redirect('/slider-table')->with('status', 'Your Data is Deleted');
    }
}
