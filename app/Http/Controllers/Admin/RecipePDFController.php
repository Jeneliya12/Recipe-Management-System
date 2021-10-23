<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use PDF;

class RecipePDFController extends Controller
{
    function index()
    {
     $recipe = $this->get_recipe_data();
     return view('admin.pages.form.recipe-register')->with('recipe', $recipe);
    }

    function get_recipe_data()
    {
     $recipe = DB::table('recipes')
         ->limit(10)
         ->get();
     return $recipe;
    }

    function pdf()
    {
     $pdf = \App::make('dompdf.wrapper');
     $pdf->loadHTML($this->convert_recipe_data_to_html());
     return $pdf->stream();
    }

    function convert_recipe_data_to_html()
    {
     $recipe = $this->get_recipe_data();
     $output = '
     <h3 align="center">Recipe Data</h3>
     <table width="100%" style="border-collapse: collapse; border:0px;">
      <tr>
    <th style="border: 1px solid;">Author Name</th>
    <th style="border: 1px solid;">Intro</th>
    <th style="border: 1px solid;">description</th>
    <th style="border: 1px solid;">shortdescription</th>
    <th style="border: 1px solid;">detaildescription</th>
    <th style="border: 1px solid;">cooktime</th>
   </tr>
     ';  
     foreach($recipe as $recipe)
     {
      $output .= '
      <tr>
        <td style="border: 1px solid; padding:10px;">'.$recipe->name.'</td>
        <td style="border: 1px solid; padding:10px;">'.$recipe->authorintro.'</td>
        <td style="border: 1px solid; padding:10px;">'.$recipe->description.'</td>
        <td style="border: 1px solid; padding:10px;">'.$recipe->shortdescription.'</td>
        <td style="border: 1px solid; padding:10px;">'.$recipe->detaildescription.'</td>
        <td style="border: 1px solid; padding:10px;">'.$recipe->cooktime.'</td>
      </tr>
      ';
     }
     $output .= '</table>';
     return $output;
    }
}
