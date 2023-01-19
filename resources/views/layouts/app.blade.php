<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>
        {{ isset($pageTitle) ? config('app.name') . ' ! ' .$pageTitle : config('app.name') }}
    </title>
    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <!--
    <script src="https://cdn.tailwindcss.com"></script>
-->


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

            @if(! Route::is('help'))
            <li>
                <a href="{{route('help') }}">
                    Aide
                </a>
            </li>
            @endif
        </ul>
    </div>

    <main class="main" role='main'>
        @yield('content')
    </main>


    <hr>

    @include ('layouts/partials._footer')
</body>

</html>