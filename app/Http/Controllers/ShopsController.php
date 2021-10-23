<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShopsController extends Controller
{
    public function index(Request $request)
    {
     return view ('admin.index');
    }

    public function healthy(Request $request)
    {
     return view ('admin.index2');
    }

    public function about(Request $request)
    {
     return view ('admin.index3');
    }

    public function widgets(Request $request)
    {
     return view ('admin.pages.widgets');
    }

    public function forms(Request $request)
    {
     return view ('admin.pages.forms.general');
    }

    public function advanced(Request $request)
    {
     return view ('admin.pages.forms.advanced');
    }
}
