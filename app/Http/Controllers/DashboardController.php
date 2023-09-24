<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct()
    {
        // Apply the 'auth' middleware to restrict access to the entire controller
        $this->middleware('auth');
    }

    public function index()
    {
        return view('dashboard'); // Replace with your dashboard view file
    }

    public function showLandingPage()
    {
        return view('dashboard.landing_page');
    }

    public function showHome()
    {
        return view('dashboard.home');
    }

    // Your existing methods here
}
