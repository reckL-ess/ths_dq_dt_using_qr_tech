@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Profile</h2>
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <form method="POST" action="{{ route('profile.update') }}">
        @csrf
        <!-- Display user's current information -->
        <label for="userName">User Name:</label>
        <input type="text" id="userName" name="name" value="{{ Auth::user()->name }}" readonly>
        <label for="userEmail">Email:</label>
        <input type="email" id="userEmail" name="email" value="{{ Auth::user()->email }}" readonly>


        <!-- Add more fields if needed -->

        <button type="submit" class="btn btn-primary">Update Profile</button>
    </form>
</div>
@endsection
