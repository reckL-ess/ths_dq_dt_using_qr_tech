@extends('layouts.app')

@section('content')

@if (auth()->user()->isAdmin())
        <h1>Welcome, Admin!</h1>
        <!-- Admin-specific content goes here -->
    @else
        <h1>Welcome, User!</h1>
        <!-- User-specific content goes here -->
    @endif
<div >
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
