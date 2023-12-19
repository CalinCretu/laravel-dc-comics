<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title', 'Comics')</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>
    <header>
        <div class="container">
            <div class="row">
                <nav>
                    <ul class="d-flex justify-content-between mt-2">
                        <li>
                            <a class="btn btn-outline-primary" href="{{ route('home') }}">Home</a>
                        </li>
                        <li>
                            <a class="btn btn-outline-primary" href="{{ route('comics.index') }}">Comics List</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>

    <main class="bg-light">
        @yield('content')
    </main>

</body>

</html>
