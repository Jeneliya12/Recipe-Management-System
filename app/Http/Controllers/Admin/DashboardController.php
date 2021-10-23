<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Models\User;
use App\Models\Recipe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index(){
        return view('admin.index');
    }

    public function userchart(){
    	$users = User::select(DB::raw ('COUNT(*) as count'))
                ->whereYear('created_at', date('Y'))
                ->groupBy(DB::raw('Month(created_at)'))
                ->pluck('count');
        $months = User::select(DB::raw ('Month(created_at) as month'))
            ->whereYear('created_at', date('Y'))
            ->groupBy(DB::raw('Month(created_at)'))
            ->pluck('month');
        $recipe = Recipe::select(DB::raw ('COUNT(*) as count'))
                ->whereYear('created_at', date('Y'))
                ->groupBy(DB::raw('Month(created_at)'))
                ->pluck('count');
        $recipemonth = Recipe::select(DB::raw ('Month(created_at) as month'))
            ->whereYear('created_at', date('Y'))
            ->groupBy(DB::raw('Month(created_at)'))
            ->pluck('month');

        $datas = array(0,0,0,0,0,0,0,0,0,0,0,0);
        foreach($months as $index => $month)
        {
            $datas[$month] = $users[$index];
        }


        $data = array(0,0,0,0,0,0,0,0,0,0,0,0);
        foreach($recipemonth as $index => $recipemonth)
        {
            $data[$recipemonth] = $recipe[$index];
        }

        return view('admin.pages.charts.user-chart', compact('datas', 'data'));
    }
}




