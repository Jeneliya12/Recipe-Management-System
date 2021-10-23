<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
Use PDF;

class BookingPDFController extends Controller
{
    function index()
    {
     $booking = $this->get_booking_data();
     return view('admin.pages.form.booking-register')->with('booking', $booking);
    }

    function get_booking_data()
    {
     $booking = DB::table('bookings')
         ->limit(100)
         ->get();
     return $booking;
    }

    function pdf()
    {
     $pdf = \App::make('dompdf.wrapper');
     $pdf->loadHTML($this->convert_booking_data_to_html());
     return $pdf->stream();
    }

    function convert_booking_data_to_html()
    {
     $booking = $this->get_booking_data();
     $output = '
     <h3 align="center">Booking Data</h3>
     <table width="100%" style="border-collapse: collapse; border:0px;">
      <tr>
	    <th style="border: 1px solid;">Name</th>
	    <th style="border: 1px solid;">Phone</th>
	    <th style="border: 1px solid;">Email</th>
	    <th style="border: 1px solid;">Address</th>
	    <th style="border: 1px solid;">Ingredients</th>
	    <th style="border: 1px solid;">Message</th>
   	</tr>
     ';  
     foreach($booking as $booking)
     {
      $output .= '
      <tr>
        <td style="border: 1px solid; padding:10px;">'.$booking->name.'</td>
        <td style="border: 1px solid; padding:10px;">'.$booking->phone.'</td>
        <td style="border: 1px solid; padding:10px;">'.$booking->email.'</td>
        <td style="border: 1px solid; padding:10px;">'.$booking->address.'</td>
        <td style="border: 1px solid; padding:10px;">'.$booking->number.'</td>
        <td style="border: 1px solid; padding:10px;">'.$booking->message.'</td>
      </tr>
      ';
     }
     $output .= '</table>';
     return $output;
    }
}
