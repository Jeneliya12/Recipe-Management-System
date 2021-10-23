<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Gallery;
use Session;

class GalleryController extends Controller
{
    public function galleries(){
		return view ('admin.pages.forms.gallery-register');
	}

	public function store(Request $request)
    {
        $galleries=new Gallery;

        $galleries->gallery=$request->input('gallery');
        $galleries->save();
        
        Session::flash('statuscode','success');
        return redirect('gallery-table')->with('status', 'Gallery Added Sucessfully');
    }

    public function galleriestable(){
		$galleries= Gallery::get();
		return view ('/admin.pages.tables.galleries-table', compact('galleries'));
	}

	public function galleryedit(Request $request, $id){
		$galleries= Gallery::findOrFail($id);

 		Session::flash('statuscode','success');
 		return view('admin.pages.forms.gallery-edit')->with('galleries', $galleries);
	}

	public function registerupdate(Request $request, $id){
		$galleries= Gallery::find($id);

        $galleries->gallery=$request->input('gallery');
        $galleries->update();

        Session::flash('statuscode','success');
        return redirect('/gallery-table')->with('status', 'Your Data is Updated');
	}

	public function registerdelete(Request $request, $id)
    {
        $galleries= Gallery::findOrFail($id);
        $galleries->delete();

        Session::flash('statuscode','error');
        return redirect('/gallery-table')->with('status', 'Your Data is Deleted');
    }
}
