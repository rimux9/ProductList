<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    // view page
    public function view()
    {
        return view('home');
 
    }
}
