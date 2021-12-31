<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Dashboard extends Controller
{
    //
    function dashboard()
    {
        return view('pages.index');
    }
}
