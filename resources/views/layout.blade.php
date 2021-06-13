<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Bulatov</title>

        <link rel="stylesheet" type="text/css" href="{{ asset('/css/common.css') }}">
    </head>
    <body class="body">
    @include('partials.header')
    @yield('content')
    </body>
</html>
