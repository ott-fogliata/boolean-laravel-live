<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>La Molisana - @yield('title')</title> <!-- todo -->
    <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
    <!--<script src="{{ mix('/js/app.js') }}"></script>-->
</head>
<body>

    <div class="container-fluid">
        <header>
            @include('templates.header')
        </header>

        <main>
            @yield('main')
        </main>

        <footer>
            @include('templates.footer')
        </footer>
    </div>
</body>
</html>