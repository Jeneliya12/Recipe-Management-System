<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use PDF;

class UserPDFController extends Controller
{
    function index()
    {
     $user = $this->get_user_data();
     return view('admin.pages.form.user-register')->with('user', $user);
    }

    function get_user_data()
    {
     $user = DB::table('users')
         ->limit(100)
         ->get();
     return $user;
    }

    function pdf()
    {
     $pdf = \App::make('dompdf.wrapper');
     $pdf->loadHTML($this->convert_user_data_to_html());
     return $pdf->stream();
    }

    function convert_user_data_to_html()
    {
     $user = $this->get_user_data();
     $output = '
     <h3 align="center">User Data</h3>
     <table width="100%" style="border-collapse: collapse; border:0px;">
      <tr>
	    <th style="border: 1px solid;">Name</th>
	    <th style="border: 1px solid;">Usertype</th>
	    <th style="border: 1px solid;">Email</th>
	    <th style="border: 1px solid;">Phone</th>
	    <th style="border: 1px solid;">isactive</th>
   	</tr>
     ';  
     foreach($user as $user)
     {
      $output .= '
      <tr>
        <td style="border: 1px solid; padding:10px;">'.$user->name.'</td>
        <td style="border: 1px solid; padding:10px;">'.$user->usertype.'</td>
        <td style="border: 1px solid; padding:10px;">'.$user->email.'</td>
        <td style="border: 1px solid; padding:10px;">'.$user->phone.'</td>
        <td style="border: 1px solid; padding:10px;">'.$user->is_active.'</td>
      </tr>
      ';
     }
     $output .= '</table>';
     return $output;
    }
}
