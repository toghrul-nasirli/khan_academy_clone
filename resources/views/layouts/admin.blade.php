<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('partials.admin._head')
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        @include('partials.admin._nav')
        @include('partials.admin._aside')

        <div class="content-wrapper">
          @yield('content')
        </div>
        
        @include('partials.admin._footer')
    </div>

    @include('partials.admin._scripts')
    @include('partials.admin._messages')
</body>

</html>
