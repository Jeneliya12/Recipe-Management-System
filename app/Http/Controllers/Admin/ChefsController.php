<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Chef;
use Session;

class ChefsController extends Controller
{
     public function chefs(){
        return view('admin.pages.forms.chefs-register');
    }

     public function chefstable(){
        $chefs= Chef::get();

        return view('admin.pages.tables.chefs-table', compact('chefs'));
    }

    public function store(Request $request)
    {
        $chefs=new Chef;

        $chefs->name=$request->input('name');
        $chefs->image=$request->input('image');
        $chefs->position=$request->input('position');
        $chefs->intro=$request->input('intro');
        $chefs->experience=$request->input('experience');
        $chefs->description=$request->input('description');
        $chefs->twitter=$request->input('twitter');
        $chefs->facebook=$request->input('facebook');
        $chefs->instagram=$request->input('instagram');
        $chefs->linkedin=$request->input('linkedin');
        $chefs->save();

        Session::flash('statuscode','success');
        return redirect('/chefs-table')->with('status', 'Chef Added Sucessfully');
    }

    public function show(Request $request, $id)
        {
       
        }

    public function registeredit(Request $request, $id)
    {
        $chefs= Chef::findOrFail($id);

        Session::flash('statuscode','success');
        return view('admin.pages.forms.chefs-edit')->with('chefs', $chefs);
    }
    
    public function registerupdate(Request $request, $id)
    {
        $chefs= Chef::findOrFail($id);

        $chefs->name=$request->input('name');
        $chefs->image=$request->input('image');
        $chefs->position=$request->input('position');
        $chefs->intro=$request->input('intro');
        $chefs->experience=$request->input('experience');
        $chefs->description=$request->input('description');
        $chefs->twitter=$request->input('twitter');
        $chefs->facebook=$request->input('facebook');
        $chefs->instagram=$request->input('instagram');
        $chefs->linkedin=$request->input('linkedin');

        $chefs->update();

        Session::flash('statuscode','success');
        return redirect('/chefs-table')->with('status', 'Your Data is Updated');
    }
    
    public function registerdelete(Request $request, $id)
    {
        $chefs= Chef::findOrFail($id);
        $chefs->delete();

        Session::flash('statuscode','error');
        return redirect('/chefs-table')->with('status', 'Your Data is Deleted');
    }
}
