<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Szallas.hu - Bankuti - Sitebuild feladat</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <header>
        <!-- Add your header content here -->
    </header>
    Hello world!
    <main>
        <!-- Add your main content here -->
        @yield('content')
    </main>

    <footer>
        <!-- Add your footer content here -->
    </footer>

    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
