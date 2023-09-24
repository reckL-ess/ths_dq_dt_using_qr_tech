<!-- resources/views/landing_page.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Welcome to the Tandaay High School Document Tracking System</h1>
        <p>
            This system allows you to request documents using QR codes, track the status of your requests,
            and view your request history.
        </p>
        <h2>Quick Actions</h2>
        <ul>
            <li><a href="{{ route('dashboard.request') }}">Request Documents</a></li>
            <li><a href="{{ route('dashboard.track') }}">Track Status</a></li>
            <li><a href="{{ route('dashboard.history') }}">Request History</a></li>
        </ul>
        <h2>Announcements</h2>
        <p>Stay updated with the latest news and updates about the system.</p>
    </div>

