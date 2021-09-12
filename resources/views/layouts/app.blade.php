<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('partials._head')
</head>

<body>
    @include('partials._nav')

    <main>
        @yield('content')
    </main>
    
    @include('partials._footer')
</body>

</html>
