<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
Use PDF;

class MenuPDFController extends Controller
{
     function index()
    {
     $menu = $this->get_menu_data();
     return view('admin.pages.form.menu-register')->with('menu', $menu);
    }

    function get_menu_data()
    {
     $menu = DB::table('menus')
         ->limit(100)
         ->get();
     return $menu;
    }

    function pdf()
    {
     $pdf = \App::make('dompdf.wrapper');
     $pdf->loadHTML($this->convert_menu_data_to_html());
     return $pdf->stream();
    }

    function convert_menu_data_to_html()
    {
     $menu = $this->get_menu_data();
     $output = '
     <h3 align="center">Menu Data</h3>
     <table width="100%" style="border-collapse: collapse; border:0px;">
	<tr>
	    <th style="border: 1px solid;">Title</th>
	    <th style="border: 1px solid;">Description</th>
	    <th style="border: 1px solid;">ShortDescription</th>
	    <th style="border: 1px solid;">DetailDescription</th>
	    <th style="border: 1px solid;">Price</th>
	</tr>
     ';  
     foreach($menu as $menu)
     {
      $output .= '
      <tr>
        <td style="border: 1px solid; padding:10px;">'.$menu->title.'</td>
        <td style="border: 1px solid; padding:10px;">'.$menu->description.'</td>
        <td style="border: 1px solid; padding:10px;">'.$menu->shortdescription.'</td>
        <td style="border: 1px solid; padding:10px;">'.$menu->detaildescription.'</td>
        <td style="border: 1px solid; padding:10px;">'.$menu->price.'</td>
      </tr>
      ';
     }
     $output .= '</table>';
     return $output;
    }
}
