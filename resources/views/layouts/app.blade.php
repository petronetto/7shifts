<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>7shifts - @yield('title')</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    @section('navbar')
        @include('layouts.navbar')
    @show

    <main role="main" class="container">
        @yield('content')
    </main>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>