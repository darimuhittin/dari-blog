<!DOCTYPE html>

<head lang="tr">

    <title>Muhittin Darı</title>
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/mycss.css') }}" rel="stylesheet">
    <script src="https://kit.fontawesome.com/fdf304cd3d.js" crossorigin="anonymous"></script>

    <!-- <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet"> -->
</head>

<body class="bg-gray-100">

    @include('components._navbar')
    {{ $slot }}

    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
</body>
