<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('partials._head')
</head>

<body>
    @include('partials._nav')

    <main class="py-4">
        @yield('content')
    </main>
    
    @include('partials._footer')
</body>

</html>
