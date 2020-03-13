<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name') }}</title>
        <link href="https://fonts.googleapis.com/css?family=Assistant&display=swap" rel="stylesheet">
        <link href="{{ asset('fonts/fontawesome-free-5.3.1-web/css/all.min.css') }}" rel="stylesheet" type="text/css" >
        <script src="{{ asset('/js/app.js') }}" defer></script>
        <link href="{{ asset('css/layout_admin.css') }}" rel="stylesheet" type="text/css" >
        <link href="{{ asset('css/blocks_admin.css') }}" rel="stylesheet" type="text/css" >
        <link href="{{ asset('css/grid_admin.css') }}" rel="stylesheet" type="text/css" >
    </head>
    <body>
        @inertia
    </body>
</html>
