<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<meta name="csrf-token" content="{{ csrf_token() }}">

<title>{{ config('app.name', 'Khan Academy Clone') }}</title>

<link rel="dns-prefetch" href="//fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<link href="{{ asset('frontend/css/main.css') }}" rel="stylesheet">
<script src="{{ asset('js/app.js') }}"></script>
@yield('styles')