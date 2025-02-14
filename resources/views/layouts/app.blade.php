<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title ?? 'Laravel App' }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="flex flex-col lg:flex-row">
    <x-sidebar />

    <main>
        {{ $slot }}
        <footer>Footer&copy; {{ date('Y') }} Laravel App
        </footer>
    </main>

    <script src="https://kit.fontawesome.com/d81661e38c.js" crossorigin="anonymous"></script>
    @vite(['resources/js/custom.js'])
</body>
</html>
