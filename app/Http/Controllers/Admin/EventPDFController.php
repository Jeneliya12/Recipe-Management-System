<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use PDF;

class EventPDFController extends Controller
{
     function index()
    {
     $event = $this->get_event_data();
     return view('admin.pages.form.event-register')->with('event', $event);
    }

    function get_event_data()
    {
     $event = DB::table('events')
         ->limit(100)
         ->get();
     return $event;
    }

    function pdf()
    {
     $pdf = \App::make('dompdf.wrapper');
     $pdf->loadHTML($this->convert_event_data_to_html());
     return $pdf->stream();
    }

    function convert_event_data_to_html()
    {
     $event = $this->get_event_data();
     $output = '
     <h3 align="center">Event Data</h3>
     <table width="100%" style="border-collapse: collapse; border:0px;">
	<tr>
	    <th style="border: 1px solid;">Title</th>
	    <th style="border: 1px solid;">Description</th>
	    <th style="border: 1px solid;">ShortDescription</th>
	    <th style="border: 1px solid;">DetailDescription</th>
	    <th style="border: 1px solid;">Price</th>
	</tr>
     ';  
     foreach($event as $event)
     {
      $output .= '
      <tr>
        <td style="border: 1px solid; padding:10px;">'.$event->title.'</td>
        <td style="border: 1px solid; padding:10px;">'.$event->description.'</td>
        <td style="border: 1px solid; padding:10px;">'.$event->shortdescription.'</td>
        <td style="border: 1px solid; padding:10px;">'.$event->detaildescription.'</td>
        <td style="border: 1px solid; padding:10px;">'.$event->price.'</td>
      </tr>
      ';
     }
     $output .= '</table>';
     return $output;
    }
}
