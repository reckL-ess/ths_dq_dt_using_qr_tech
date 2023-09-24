<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DocumentRequest; // Replace with your actual model
use Illuminate\Support\Facades\Mail; // Import the Mail facade for sending emails
use App\Mail\DocumentRequestNotification;


class DocumentRequestController extends Controller
{
    public function showForm()
    {
        // Define the list of offices
        $offices = [
            "Office of the Principal",
            "Accounting Office",
            "Supply Office",
            "Library",
            "Bid and Awards Committee",
            "Physical Facilities",
            "Guidance Office",
            "Registrar",
            "Senior High Coordinator",
            "Subject Area Coordinator 1",
            "Subject Area Coordinator 2",
            "Subject Area Coordinator 3",
            "Subject Area Coordinator 4",
            "Subject Area Coordinator 5",
            "Subject Area Coordinator 6",
            "Subject Area Coordinator 7",
            "Subject Area Coordinator 8",
        ];

        return view('request.index', compact('offices'));
    }

    public function submitForm(Request $request)
    {
        // Validate the form data
        $request->validate([
            'sender' => 'required|string|max:255',
            'recipient' => 'required|array', // Adjust validation rules based on the form fields
            'recipient.*' => 'in:Office of the Principal,Accounting Office,Supply Office,Library,Bid and Awards Committee,Physical Facilities,Guidance Office,Registrar,Senior High Coordinator,Subject Area Coordinator 1,Subject Area Coordinator 2,Subject Area Coordinator 3,Subject Area Coordinator 4,Subject Area Coordinator 5,Subject Area Coordinator 6,Subject Area Coordinator 7,Subject Area Coordinator 8',
            'subject' => 'required|string|max:255',
            'description' => 'required|string',
            'prioritization' => 'required|in:high,medium,low',
            // Add other validation rules here
        ]);

        // Process the form data here
        $documentRequest = new DocumentRequest();
        $documentRequest->sender = $request->input('sender');
        $documentRequest->recipient = json_encode($request->input('recipient'));
        $documentRequest->subject = $request->input('subject');
        $documentRequest->description = $request->input('description');
        $documentRequest->prioritization = $request->input('prioritization');
        // Set other properties accordingly

        $documentRequest->save();

        // You can perform further processing, database operations, or notifications here

        // You can add additional logic, such as sending notifications or handling file uploads, here.
        // Example: Send an email notification
        Mail::to('sweetbrokenangel.1147@gmail.com')->send(new DocumentRequestNotification());

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Your document request has been submitted.');

    }
}
