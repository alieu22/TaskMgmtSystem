<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mindsight Task Mgmt System</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <!-- Styles -->
    <style>
        body {
            font-family: Figtree, sans-serif;
            font-feature-settings: normal;
            background-image: url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(0,0,0,0.07)'/%3E%3C/svg%3E");
        }

        .container {
            display: flex;
            flex-direction: column; /* Change to column layout */
            justify-content: flex-start; /* Align content to the top */
            align-items: center;
            min-height: 100vh;
            background-image: url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(255,255,255,0.07)'/%3E%3C/svg%3E");
        }

        .title {
            font-size: 1.5rem;
            font-weight: 600;
            text-align: center;
            margin-top: 2rem; /* Adjust top margin */
        }

        .links {
            display: flex;
            align-items: center;
            margin-top: 1rem; /* Adjust top margin */
        }

        .links a {
            color: #9ca3af;
            text-decoration: none;
            margin-left: 1rem;
            font-weight: 600;
            transition: color 0.2s;
        }

        .links a:hover {
            color: #374151;
        }
    </style>
</head>
<body class="antialiased">
    <div class="container">
        <h1 class="title">Welcome to the Mindsight Mentors <br> task Management system</h1>
        <div class="links">
        @auth
    <!-- User is authenticated, display "Home" link, which would be the landing page to the actual task management system once they get in, the name needs to be changed -->
    <a href="{{ url('/home') }}">Home</a>
@else
    <!-- User is not authenticated, display "Log in" link -->
    <a href="{{ route('login') }}">Log in</a>
    
    <!-- Check if "Register" route exists and display "Register" link if it does -->
    @if (Route::has('register'))
        <a href="{{ route('register') }}">Register</a>
    @endif
@endauth


        </div>
        <div class = "mindsight-logo">
        <img src="{{ asset('img/mindsight-img.jpeg') }}" alt="deliveryman">
    </div>
    
    </div>
</body>
</html>


