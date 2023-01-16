<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->

</head>

<body class="">
    <nav class="nav">
        <ul>
            <li>
                <a href="/">Accueil</a>
            </li>

            <li>
                <a href="/about">
                    A propos
                </a>
            </li>
        </ul>
    </nav>

    <main class="main">
        <h1>
            Hello city
        </h1>

        <p>
            Il est {{ date('H:i') }}
        </p>
    </main>

    <hr>

    <footer class="footer">
        <p>
            annee {{ date('Y') }}
        </p>
    </footer>
</body>

</html>