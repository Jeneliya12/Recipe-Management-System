<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Recipe;
use App\Models\Booking;
use Illuminate\Http\Request;
use App\Charts\Recipechart;

class ChartsController extends Controller
{

    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }

    public function index(Request $request)
    {
        $bg= Recipe::orderBy('created_at')->pluck('id', 'created_at');
        $bh= Booking::orderBy('number')->pluck('id', 'address');
        

        $chart = new Recipechart;
        $chart->labels($bg->keys());
        $chart->dataset('id', 'bar', $bg->values())->backgroundColor('green'); 
      

        $charts = new Recipechart;
        $charts->labels($bh->keys());
        $charts->dataset('id', 'line', $bh->values())->backgroundColor('red'); 
      
       
        return view('admin.chart', compact('chart', 'charts'));
    }

}
