<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Wisdom</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display&display=swap" rel="stylesheet" />
    <link href="/fonts/cabinet-grotesk.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('asset/style.css') }}" />
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-white w-full h-full">
    <!-- header -->
    @yield('header')
    @include('partials.nav')
    @yield('body')

    @yield('content')

    @include('partials.scripts')
</body>

</html>
