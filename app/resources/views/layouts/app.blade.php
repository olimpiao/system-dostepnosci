<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>System zgłaszania problemów z dostępnością</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>

    <nav class="navbar navbar-dark bg-dark mb-4">
        <div class="container">
            <a class="navbar-brand" href="/reports">
                System dostępności
            </a>
        </div>
    </nav>

    <div class="container">
        @yield('content')
    </div>

</body>

</html>