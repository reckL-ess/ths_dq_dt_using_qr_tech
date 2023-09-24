@extends('layouts.app')

@section('title', 'Login Form')

@section('content')
<div style="margin-top: 50px;">
    <div style="width: 400px; margin: 0 auto;">
        <div style="text-align: center; margin-bottom: 20px;">
            <h2>Login</h2>
        </div>
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div style="margin-bottom: 15px;">
                <label for="email" style="display: block;">Email Address:</label>
                <input id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="email" style="width: 100%; padding: 10px;">
                @error('email')
                    <span style="color: red;">{{ $message }}</span>
                @enderror
            </div>

            <div style="margin-bottom: 15px;">
                <label for="password" style="display: block;">Password:</label>
                <input id="password" type="password" name="password" required autocomplete="current-password" style="width: 100%; padding: 10px;">
                @error('password')
                    <span style="color: red;">{{ $message }}</span>
                @enderror
            </div>

            <div style="margin-bottom: 15px;">
                <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                <label for="remember" style="display: inline;">Remember Me</label>
            </div>

            <div style="text-align: center;">
                <button type="submit" style="background-color: #007bff; color: #fff; border: none; padding: 10px 20px; cursor: pointer;">Login</button>
            </div>
        </form>
    </div>
</div>
@endsection