@extends('layouts.app')

@section('title', 'Registration Form')

@section('content')
<div style="margin-top: 50px;">
    <div style="width: 400px; margin: 0 auto;">
        <div style="text-align: center; margin-bottom: 20px;">
            <h2>Register</h2>
        </div>
        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div style="margin-bottom: 15px;">
                <label for="name" style="display: block;">Name:</label>
                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus style="width: 100%; padding: 10px;">
                @error('name')
                    <span style="color: red;">{{ $message }}</span>
                @enderror
            </div>

            <div style="margin-bottom: 15px;">
                <label for="email" style="display: block;">Email Address:</label>
                <input id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="email" style="width: 100%; padding: 10px;">
                @error('email')
                    <span style="color: red;">{{ $message }}</span>
                @enderror
            </div>

            <div style="margin-bottom: 15px;">
                <label for="password" style="display: block;">Password:</label>
                <input id="password" type="password" name="password" required autocomplete="new-password" style="width: 100%; padding: 10px;">
                @error('password')
                    <span style="color: red;">{{ $message }}</span>
                @enderror
            </div>

            <div style="margin-bottom: 15px;">
                <label for="password-confirm" style="display: block;">Confirm Password:</label>
                <input id="password-confirm" type="password" name="password_confirmation" required autocomplete="new-password" style="width: 100%; padding: 10px;">
            </div>

            <div style="text-align: center;">
                <button type="submit" style="background-color: #007bff; color: #fff; border: none; padding: 10px 20px; cursor: pointer;">Register</button>
            </div>
        </form>
    </div>
</div>
@endsection
