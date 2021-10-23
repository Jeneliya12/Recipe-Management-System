<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Recipe;
use App\Models\Comment;
use Session;

class RecipeListController extends Controller
{
    
    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }

	public function registered()
 	{
 		return view('admin.pages.forms.recipe-register');
 	}  

    public function authorinfo(Recipe $recipe, $id)
    {
        $recipes= Recipe::findOrFail($id);
        return view('recipe.authorinfo', compact('recipes'));
    } 

    public function recipetable(){
        $recipes= Recipe::get();

        return view('admin.pages.tables.recipe-table', compact('recipes'));
    }

    public function show(Comment $comment, Recipe $recipe, $id)
        {
            $comment= Comment::findorfail($id);
            $recipes= Recipe::findOrFail($id);
            return view('recipe.show', compact('comment', 'recipes'));
        }

 	public function store(Request $request)
    {
    	$recipes=new Recipe;

        $recipes->name=$request->input('name');
        $recipes->title=$request->input('title');
        $recipes->shortdescription=$request->input('shortdescription');
        $recipes->description=$request->input('description');
        $recipes->detaildescription=$request->input('detaildescription');
        $recipes->time=$request->input('time');
        $recipes->cooktime=$request->input('cooktime');
        $recipes->yield=$request->input('yield');
        $recipes->summary=$request->input('summary');
        $recipes->ingredients=$request->input('ingredients');
        $recipes->methodtitle=$request->input('methodtitle');
        $recipes->method=$request->input('method');
        $recipes->authorintro=$request->input('authorintro');
        $recipes->authorphoto=$request->input('authorphoto');
        $recipes->commentor=$request->input('commentor');
        $recipes->comments=$request->input('comments');
        $recipes->comments_date=$request->input('comments_date');
        $recipes->img=$request->input('img');
        $recipes->recipedate=$request->input('recipedate'); 
        $recipes->save();

        Session::flash('statuscode','success');
        return redirect('/recipe-table')->with('status', 'Recipe Added Sucessfully');  
    }

    public function registeredit(Request $request, $id)
 	{
 		$recipes= Recipe::findOrFail($id);

 		Session::flash('statuscode','success');
 		return view('admin.pages.forms.recipe-edit')->with('recipes', $recipes);
 	}

        public function registerupdate(Request $request, $id)
    {
       
        $recipes= Recipe::find($id);

        $recipes->name=$request->input('name');
        $recipes->title=$request->input('title');
        $recipes->shortdescription=$request->input('shortdescription');
        $recipes->description=$request->input('description');
        $recipes->detaildescription=$request->input('detaildescription');
        $recipes->time=$request->input('time');
        $recipes->cooktime=$request->input('cooktime');
        $recipes->yield=$request->input('yield');
        $recipes->summary=$request->input('summary');
        $recipes->ingredients=$request->input('ingredients');
        $recipes->methodtitle=$request->input('methodtitle');
        $recipes->method=$request->input('method');
        $recipes->authorintro=$request->input('authorintro');
        $recipes->authorphoto=$request->input('authorphoto');
        $recipes->commentor=$request->input('commentor');
        $recipes->comments=$request->input('comments');
        $recipes->comments_date=$request->input('comments_date');
        $recipes->img=$request->input('img');
        $recipes->recipedate=$request->input('recipedate');
        $recipes->update();

        Session::flash('statuscode','success');
        return redirect('/recipe-table')->with('status', 'Your Data is Updated');
    }
    
    public function registerdelete(Request $request, $id)
    {
        $recipes= Recipe::findOrFail($id);
        $recipes->delete();

        Session::flash('statuscode','error');
        return redirect('/recipe-table')->with('status', 'Your Data is Deleted');
    }

       public function reserve(Request $request, $id)
    {
        $recipes= Recipe::findOrFail($id);

        Session::flash('statuscode','success');
        return view('admin.reserve')->with('recipes', $recipes);
    }

      public function cancel(Request $request, $id)
    {
        $recipes= Recipe::findOrFail($id);

        Session::flash('statuscode','success');
        return view('admin.cancel')->with('recipes', $recipes);
    }
}
