<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Pagebuilder</title>

</head>
    <body>
        <header class="main-header">

        </header>
        <div class="content">

            @yield('content')

        </div>
    </body>
</html>