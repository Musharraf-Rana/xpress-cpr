<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Xpress </title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @include('layouts.css')
    @yield('page_css')
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>

<style>
    input::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }

    /* Firefox */
    input[type=number] {
        -moz-appearance: textfield;
    }
</style>

<body>

    @include('layouts.header')

    @yield('content')

    @include('layouts.script')
    @include('layouts.footer')

    @yield('page_script')
</body>

</html>
