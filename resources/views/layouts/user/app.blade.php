<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Dashboard</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display&display=swap" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <link href="{{ asset('asset/fonts/CabinetGrotesk-Extrabold.otf') }}" rel="stylesheet" />
    @include('layouts.user.head-css')
    @stack('page-css')
    <script src="https://cdn.tailwindcss.com"></script>
</head>

@section('body')
<div id="loader" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50 hidden">
    <div class="w-16 h-16 border-4 border-t-4 border-t-transparent rounded-full animate-spin"></div>
</div>
    <body class="bg-gray-100 w-full h-full font-raleway">
    @show
    <header class="bg-white text-gray-700 px-10 shadow-[0_0_10px_rgba(0,0,0,0.2)] z-30 w-full h-8.3vh">
        @include('layouts.user.topbar')
        @include('layouts.user.sidebar')
        @yield('content')
        @include('layouts.user.footer')
        @include('layouts.user.scripts')
        @stack('page-script')
</body>

</html>
