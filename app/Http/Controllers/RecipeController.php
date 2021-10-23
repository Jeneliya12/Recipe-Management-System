<?php

namespace App\Http\Controllers;
use App\Models\Recipe;
use Session;

use Illuminate\Http\Request;

class RecipeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $recipe= Recipe::all();
        return view ('recipe.index', compact('recipe'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('recipe.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $recipe=new recipe;

        $recipe->name=$request->input('name');
        $recipe->title=$request->input('title');
        $recipe->shortdescription=$request->input('shortdescription');
        $recipe->description=$request->input('description');
        $recipe->detaildescription=$request->input('detaildescription');
        $recipe->time=$request->input('time');
        $recipe->cooktime=$request->input('cooktime');
        $recipe->yield=$request->input('yield');
        $recipe->summary=$request->input('summary');
        $recipe->ingredients=$request->input('ingredients');
        $recipe->methodtitle=$request->input('methodtitle');
        $recipe->method=$request->input('method');
        $recipe->authorintro=$request->input('authorintro');
        $recipe->authorphoto=$request->input('authorphoto');
        $recipe->commentor=$request->input('commentor');
        $recipe->comments=$request->input('comments');
        $recipe->comments_date=$request->input('comments_date');
        $recipe->img=$request->input('img');
        $recipe->recipedate=$request->input('recipedate');
        
        $recipe->save();
        Session::flash('statuscode','success');
        return redirect('/')->with('status', 'Recipe Added Sucessfully');      
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
        {
           
        }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
