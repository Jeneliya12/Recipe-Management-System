<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Menu;
use Session;

class MenusController extends Controller
{
    public function registered()
    {
        return view('admin.pages.forms.menu-register');
    }  

     public function menutable(){
        $menu= Menu::get();

        return view('admin.pages.tables.menu-table', compact('menu'));
    }

    public function store(Request $request)
    {
        $menu=new menu;
        $menu->title=$request->input('title');
        $menu->price=$request->input('price');
        $menu->shortdescription=$request->input('shortdescription');
        $menu->description=$request->input('description');
        $menu->detaildescription=$request->input('detaildescription');
        $menu->img=$request->input('img');
        
        $menu->save();
        
        Session::flash('statuscode','success');
        return redirect('/menu-table')->with('status', 'Menu Added Sucessfully');
    }

    public function show(Request $request, $id)
        {
        
        }

    public function registeredit(Request $request, $id)
    {
        $menu= Menu::findOrFail($id);

        Session::flash('statuscode','success');
        return view('admin.pages.forms.menu-edit')->with('menu', $menu);
    }
    
    public function registerupdate(Request $request, $id)
    {
        $menu= Menu::find($id);

        $menu->title=$request->input('title');
        $menu->shortdescription=$request->input('shortdescription');
        $menu->description=$request->input('description');
        $menu->detaildescription=$request->input('detaildescription');
        $menu->img=$request->input('img');
        $menu->update();

        Session::flash('statuscode','success');
        return redirect('/menu-table')->with('status', 'Your Data is Updated');
    }
    
    public function registerdelete(Request $request, $id)
    {
        $menu= Menu::findOrFail($id);
        $menu->delete();

        Session::flash('statuscode','error');
        return redirect('/menu-table')->with('status', 'Your Data is Deleted');
    }
}
