<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('front.partials._head')
</head>

<body>
    @include('front.partials._nav')

    <main>
        @yield('content')
    </main>
    
    @include('front.partials._footer')
</body>

</html>
