<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Booking;
use Session;

class BookingController extends Controller
{
    public function booking(){
        return view('admin.pages.forms.booking-register');
    }

     public function bookingtable(){
        $booking= Booking::get();

        return view('admin.pages.tables.booking-table', compact('booking'));
    }

    public function store(Request $request)
    {
        $booking=new Booking;

        $booking->name=$request->input('name');
        $booking->email=$request->input('email');
        $booking->address=$request->input('address');
        $booking->number=$request->input('number');
        $booking->phone=$request->input('phone');
        $booking->message=$request->input('message');
        $booking->save();

        Session::flash('statuscode','success');
        return redirect('/booking-table')->with('status', 'Booking Added Sucessfully');
    }

    public function show(Request $request, $id)
        {
       
        }

    public function registeredit(Request $request, $id)
    {
        $booking= Booking::findOrFail($id);

        Session::flash('statuscode','success');
        return view('admin.pages.forms.booking-edit')->with('booking', $booking);
    }
    
    public function registerupdate(Request $request, $id)
    {
        $booking= Booking::find($id);

   		$booking->name=$request->input('name');
        $booking->email=$request->input('email');
        $booking->address=$request->input('address');
        $booking->number=$request->input('number');
        $booking->phone=$request->input('phone');
        $booking->message=$request->input('message');  
        $booking->update();

        Session::flash('statuscode','success');
        return redirect('/booking-table')->with('status', 'Your Data is Updated');
    }
    
    public function registerdelete(Request $request, $id)
    {
        $booking= Booking::findOrFail($id);
        $booking->delete();

        Session::flash('statuscode','error');
        return redirect('/booking-table')->with('status', 'Your Data is Deleted');
    }
}
