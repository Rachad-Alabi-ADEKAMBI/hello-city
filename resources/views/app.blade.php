<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>
        @yield('title', 'Hello city')
    </title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->

</head>

<body class="">
    <div class="header">
        <ul>
            <li>
                <a href="{{route('home') }}">Accueil</a>
            </li>

            @if(! Route::is('about'))
            <li>
                <a href="{{route('about') }}">
                    A propos
                </a>
            </li>
            @endif
        </ul>
    </div>

    @yield('content');


    <hr>

    <footer class="footer">
        <p>
            annee {{ date('Y') }}
        </p>
    </footer>
</body>

</html>