<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Recipe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class RecipeChartController extends Controller
{

    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }

    public function recipechart()
    {
        $recipe = Recipe::select(DB::raw ('COUNT(*) as count'))
                ->whereYear('created_at', date('Y'))
                ->groupBy(DB::raw('Month(created_at)'))
                ->pluck('count');
        $months = Recipe::select(DB::raw ('Month(created_at) as month'))
            ->whereYear('created_at', date('Y'))
            ->groupBy(DB::raw('Month(created_at)'))
            ->pluck('month');

        $datas = array(0,0,0,0,0,0,0,0,0,0,0,0);
        foreach($months as $index => $month)
        {
            $datas[$month] = $recipe[$index];
        }

        return view('admin.pages.charts.recipe-chart', compact('datas'));
    }

}
