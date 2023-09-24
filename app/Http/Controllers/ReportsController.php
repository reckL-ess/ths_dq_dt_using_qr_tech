<?php

namespace App\Http\Controllers;
use Illuminate\Routing\Controller;

use Illuminate\Http\Request;

class ReportsController extends Controller
{
    public function index()
    {
        return view('Reports.index');
    }
    
}
