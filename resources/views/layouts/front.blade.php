<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('partials.front._head')
</head>

<body>
    @include('partials.front._nav')

    <main>
        @yield('content')
    </main>
    
    @include('partials.front._footer')
</body>

</html>
