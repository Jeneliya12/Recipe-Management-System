<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use PDF;

class SaladPDFController extends Controller
{
     function index()
    {
     $salad = $this->get_salad_data();
     return view('admin.pages.form.salad-register')->with('salad', $salad);
    }

    function get_salad_data()
    {
     $salad = DB::table('salads')
         ->limit(100)
         ->get();
     return $salad;
    }

    function pdf()
    {
     $pdf = \App::make('dompdf.wrapper');
     $pdf->loadHTML($this->convert_salad_data_to_html());
     return $pdf->stream();
    }

    function convert_salad_data_to_html()
    {
     $salad = $this->get_salad_data();
     $output = '
     <h3 align="center">Salad Data</h3>
     <table width="100%" style="border-collapse: collapse; border:0px;">
	<tr>
	    <th style="border: 1px solid;">Title</th>
	    <th style="border: 1px solid;">Description</th>
	    <th style="border: 1px solid;">ShortDescription</th>
	    <th style="border: 1px solid;">DetailDescription</th>
	    <th style="border: 1px solid;">Price</th>
	</tr>
     ';  
     foreach($salad as $salad)
     {
      $output .= '
      <tr>
        <td style="border: 1px solid; padding:10px;">'.$salad->title.'</td>
        <td style="border: 1px solid; padding:10px;">'.$salad->description.'</td>
        <td style="border: 1px solid; padding:10px;">'.$salad->shortdescription.'</td>
        <td style="border: 1px solid; padding:10px;">'.$salad->detaildescription.'</td>
        <td style="border: 1px solid; padding:10px;">'.$salad->price.'</td>
      </tr>
      ';
     }
     $output .= '</table>';
     return $output;
    }
}
