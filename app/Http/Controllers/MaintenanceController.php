<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MaintenanceController extends Controller
{
    public function index()
    {
        return view('Maintenance.index');
    }
    
    // You can add more methods here if needed
}
