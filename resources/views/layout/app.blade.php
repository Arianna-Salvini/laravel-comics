<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Comics </title>

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>
    <header>
        Header
    </header>
    <main>
        @yield('content')
    </main>
    <footer>
        Footer
    </footer>
</body>

</html>