<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IncomingController extends Controller
{
    public function index()
    {
        // Your logic to display content goes here
        return view('Incoming.index'); 
    }
}