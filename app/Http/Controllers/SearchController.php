<?php

namespace App\Http\Controllers;

use App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Recipe;

class SearchController extends Controller
{
    public function searches(){
        return view('search');
    }
    public function index(Request $request)
    {
        $q= Request::get('q');
        $r= Request::get('r');
        $s= Request::get('s');
        if($q!= ""){
            $recipes= Recipe::where('title', 'LIKE', '%' . $q . '%')
            ->orWhere('name', 'LIKE', '%' . $r . '%')
            ->orWhere('ingredeints', 'LIKE', '%' . $s . '%')
            ->get();
            if (count($recipes)>0)
                return view ('searchcontent')->withDetails($recipes)->withQuery($q, $r, $s);
        }
        return view("searchcontent")->withMessage("No Recipes found");
        }
   
}
