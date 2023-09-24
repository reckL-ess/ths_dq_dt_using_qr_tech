<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Existing route for getting the authenticated user
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Route for getting user profile data
Route::middleware('auth:sanctum')->get('/getUserProfile', 'UserProfileController@getUserProfile');

// Route for updating user profile data
Route::middleware('auth:sanctum')->put('/updateProfile', 'UserProfileController@updateProfile');
