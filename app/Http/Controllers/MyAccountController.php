<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MyAccountController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        return view('myaccount.index', compact('user'));
    }
    
    // You can add more methods here if needed

    public function editProfile()
    {
        $user = Auth::user();
        return view('updateProfile', compact('user'));
    }

    // Add other methods as needed
}
