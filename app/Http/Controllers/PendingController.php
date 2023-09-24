<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;

class PendingController extends Controller
{
    public function index()
    {
        return view('pending');
    }
    
    // You can add more methods here if needed
}
