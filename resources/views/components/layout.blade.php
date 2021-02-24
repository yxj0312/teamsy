<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ url(asset('favicon.ico')) }}">

    <!-- Fonts -->
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ url(mix('css/app.css')) }}">
    @livewireStyles

    <!-- Scripts -->
    <script src="{{ url(mix('js/app.js')) }}" defer></script>
    <title>Model Learning</title>
</head>
<body class="bg-gray-200">
    <h1>
        Here we go
    </h1>

    <main class="text-sm col-span-9">
        {{ $slot }}
    </main>
</body>
</html>