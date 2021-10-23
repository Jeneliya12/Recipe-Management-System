<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Recipe;
use DB;

class PriceChartController extends Controller
{
  public function price()
    {
     $data = DB::table('recipes')
       ->select(
        DB::raw('ingredientprice as ingredientprice'),
        DB::raw('count(*) as number'))
       ->groupBy('ingredientprice')
       ->get();
     $array[] = ['ingredientprice', 'Number'];
     foreach($data as $key => $value)
     {
      $array[++$key] = [$value->ingredientprice, $value->number];
     }
     return view('admin.pages.charts.price-chart')->with('ingredientprice', json_encode($array));
    }
  }