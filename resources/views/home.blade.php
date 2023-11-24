@extends('layouts.app')
<!-- this page will be the home dashboard for the system, where the development will start, once the user logs in, it should take them here -->
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <style>
                        
                        .card-body {  /* keep for now, might need to style the whole page here until css is figured out */ 
                            width: 200px; /* Set your desired width */
                            height: 400px; /* Set your desired height */
                            }

                        
                        </style>

            <p>  You are logged in! </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
