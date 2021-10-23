<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use PDF;

class SpecialtyPDFController extends Controller
{
     function index()
    {
     $specialty = $this->get_specialty_data();
     return view('admin.pages.form.specialty-register')->with('specialty', $specialty);
    }

    function get_specialty_data()
    {
     $specialty = DB::table('specialties')
         ->limit(100)
         ->get();
     return $specialty;
    }

    function pdf()
    {
     $pdf = \App::make('dompdf.wrapper');
     $pdf->loadHTML($this->convert_specialty_data_to_html());
     return $pdf->stream();
    }

    function convert_specialty_data_to_html()
    {
     $specialty = $this->get_specialty_data();
     $output = '
     <h3 align="center">Specialty Data</h3>
     <table width="100%" style="border-collapse: collapse; border:0px;">
		<tr>
		    <th style="border: 1px solid;">Title</th>
		    <th style="border: 1px solid;">Description</th>
		    <th style="border: 1px solid;">ShortDescription</th>
		    <th style="border: 1px solid;">DetailDescription</th>
		    <th style="border: 1px solid;">Price</th>
		</tr>
     ';  
     foreach($specialty as $specialty)
     {
      $output .= '
      <tr>
        <td style="border: 1px solid; padding:10px;">'.$specialty->title.'</td>
        <td style="border: 1px solid; padding:10px;">'.$specialty->description.'</td>
        <td style="border: 1px solid; padding:10px;">'.$specialty->shortdescription.'</td>
        <td style="border: 1px solid; padding:10px;">'.$specialty->detaildescription.'</td>
        <td style="border: 1px solid; padding:10px;">'.$specialty->price.'</td>
      </tr>
      ';
     }
     $output .= '</table>';
     return $output;
    }
}
