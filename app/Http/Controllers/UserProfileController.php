<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserProfileController extends Controller
{
    public function getUserProfile(Request $request)
    {
        // Retrieve the currently authenticated user
        $user = $request->user();

        // Return user profile data
        return response()->json([
            'name' => $user->name,
            'email' => $user->email,
            // Add other profile fields as needed
        ]);
    }

    public function updateProfile(Request $request)
{
    // Retrieve the currently authenticated user
    $user = $request->user();

    // Validate and update the user's profile data
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:users,email,' . $user->id, // Validate email uniqueness except for the current user
        // Add other fields to validate and update as needed
    ]);

    $user->update([
        'name' => $request->input('name'),
        'email' => $request->input('email'),
        // Update other fields here
    ]);

    return response()->json(['message' => 'Profile updated successfully']);
}

}
