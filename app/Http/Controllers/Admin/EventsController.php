<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Events;
use Session;

class EventsController extends Controller
{
    public function events()
    {
        return view('admin.pages.forms.events-register');
    }  

     public function eventstable(){
        $events= Events::get();

        return view('admin.pages.tables.events-table', compact('events'));
    }

    public function store(Request $request)
    {
        $events=new Events;

        $events->title=$request->input('title');
        $events->price=$request->input('price');
        $events->shortdescription=$request->input('shortdescription');
        $events->description=$request->input('description');
        $events->detaildescription=$request->input('detaildescription');
        $events->img=$request->input('img');
        $events->save();
        
        Session::flash('statuscode','success');
        return redirect('/events-table')->with('status', 'Events Pages Added Sucessfully');
    }

    public function show(Request $request, $id)
        {
        //     $about= About::findOrFail($id);
        //     return view('about')->with('about', $about);
        }

    public function registeredit(Request $request, $id)
    {
        $events= Events::findOrFail($id);

        Session::flash('statuscode','success');
        return view('admin.pages.forms.events-edit')->with('events', $events);
    }
    
    public function registerupdate(Request $request, $id)
    {
        $events= Events::find($id);

        $events->title=$request->input('title');
        $events->price=$request->input('price');
        $events->shortdescription=$request->input('shortdescription');
        $events->description=$request->input('description');
        $events->detaildescription=$request->input('detaildescription');
        $events->img=$request->input('img');
        $events->update();

        Session::flash('statuscode','success');
        return redirect('/events-table')->with('status', 'Your Data is Updated');
    }
    
    public function registerdelete(Request $request, $id)
    {
        $events= Events::findOrFail($id);
        $events->delete();

        Session::flash('statuscode','error');
        return redirect('/events-table')->with('status', 'Your Data is Deleted');
    }
}
