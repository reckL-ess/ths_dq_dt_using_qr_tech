@extends('layouts.app')

@section('title', 'Portal')

@section('content')
<style>
    .limiter {
        display: flex;
        align-items: center;
        justify-content: center;
        min-height: 100vh;
        background: linear-gradient(to right, #c4d7e6 50%, #66a5ad 50%, #66a5ad 50%);
    }

    .container-login100 {
        background-color: rgba(255, 255, 255, 0.9); /* Light Gray color with opacity */
        border-radius: 10px;
        overflow: hidden;
        width: 100%;
        max-width: 500px;
    }

    .wrap-login100 {
        padding: 55px;
        text-align: center;
    }

    .login100-form-title {
        font-family: 'Poppins', sans-serif;
        font-size: 30px;
        color: #333; /* Title color */
        margin-bottom: 20px;
    }

    .login100-form-btn {
        background-color: #007bff; /* Button background color */
        color: #fff; /* Button text color */
        border: none;
        padding: 10px 20px;
        text-align: center;
        text-decoration: none;
        display: block;
        font-size: 16px;
        margin: 10px auto;
        cursor: pointer;
        border-radius: 5px;
        transition: background-color 0.3s ease;
    }

    .login100-form-btn:hover {
        background-color: maroon; /* Hover background color */
    }
</style>

<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100">
            <span class="login100-form-title p-b-49">
                Portal
            </span>
            <a class="login100-form-btn" href="{{ route('register') }}">
                Register
            </a>
            <a class="login100-form-btn" href="{{ route('login') }}">
                Login
            </a>
            <a class="login100-form-btn" href="{{ route('Compose') }}">
                Document Tracking
            </a>
            
            <!-- New button for Document Request -->
            <a class="login100-form-btn" href="{{ route('document-request.form') }}">
                Document Request
            </a>
        </div>
    </div>
</div>
@endsection

