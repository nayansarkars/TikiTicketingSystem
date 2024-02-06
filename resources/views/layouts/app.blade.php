<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tiki Ticketing System</title>
    <!-- Include your stylesheets, scripts, and other meta tags here -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>

    <header>
        <nav>
            <ul>
                <li><a href="{{ route('trips.index') }}">Home</a></li>
                <li><a href="{{ route('trips.create') }}">Create Trip</a></li>
                <!-- Add additional navigation links as needed -->
            </ul>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <!-- Add footer content as needed -->
    </footer>

    <!-- Include your scripts here -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
