<!doctype html>
<html lang="{{ str_replace("_","-",app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield("tittle")</title>
    <script src="https://kit.fontawesome.com/2af7bc7436.js" crossorigin="anonymous"></script>
    @vite("resources/css/app.css")
    @yield("headArea")
</head>
<body class="bg-zinc-100">
@include("layouts.home.header")
@yield("content")

@yield("footer")
@include('sweetalert::alert')
<script type="module" src="{{ asset("assets/home/js/App.js") }}"></script>
</body>
</html>
