<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Prodi SI') - @yield('page-title', 'Home')</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-light d-flex flex-column min-vh-100">

    <header class="bg-primary text-white py-3">
        @include('layouts.partials.header')
    </header>

    <main class="flex-fill">
        @yield('content')
    </main>

    <footer class="bg-white text-center py-3 mt-auto border-top shadow-sm">
        @include('layouts.partials.footer')
    </footer>

</body>

</html>