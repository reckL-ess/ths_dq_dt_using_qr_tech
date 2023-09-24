<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComposeController extends Controller
{
    public function index()
    {
        return view('Compose.index');
    }
    
    // You can add more methods here if needed
}
