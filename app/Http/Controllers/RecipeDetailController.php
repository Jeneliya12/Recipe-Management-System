<?php

namespace App\Http\Controllers;
use App\Models\Recipe;

use Illuminate\Http\Request;

class RecipeDetailController extends Controller
{
      public function show($id)
        {
            $recipe= Recipe::findOrFail($id);
            return view('recipe.show')->with('recipe', $recipe);
        }
}
