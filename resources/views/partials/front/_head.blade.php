<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<meta name="csrf-token" content="{{ csrf_token() }}">

<title>{{ config('app.name', 'Khan Academy Clone') }}</title>

<link rel="dns-prefetch" href="//fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

<link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
<link href="{{ asset('css/front.css') }}" rel="stylesheet">
<link href="{{ asset('frontend/css/main.css') }}" rel="stylesheet">
<script src="{{ asset('js/front.js') }}"></script>
@yield('styles')