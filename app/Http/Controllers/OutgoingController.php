<?php
namespace App\Http\Controllers;
use Illuminate\Routing\Controller;
use Illuminate\Http\Request;

class OutgoingController extends Controller
{
    public function index()
    {
        return view('outgoing.index');
    }
    
    // You can add more methods here if needed
}
