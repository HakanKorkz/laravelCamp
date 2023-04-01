<!doctype html>
<html lang="{{ str_replace("_","-",app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield("tittle")</title>
    @vite("resources/css/app.css")
    @yield("headArea")
</head>
<body class="bg-zinc-100">
<header class="flex items-center justify-center w-full h-32 bg-eerie-black-50 shadow-lg shadow-eerie-black-500/40">
    <navbar class="flex flex-1 justify-center gap-4 ">

        <a class="w-1/12 max-lg:w-1/6 max-2xl:w-1/6 max-sm:w-4/12 text-center p-2 {{ Route::is("home") ? "bg-true-blue-1000": "bg-true-blue-800" }} rounded-lg hover:bg-true-blue-400 cursor-pointer"
           href="{{ route("home") }}">
            Anasayfa
        </a>
        <a class="w-1/12 max-lg:w-1/6 max-2xl:w-1/6 max-sm:w-4/12 text-center p-2 {{ Route::is("articles") ? "bg-true-blue-1000": "bg-true-blue-800" }} rounded-lg hover:bg-true-blue-400 cursor-pointer"
           href="{{ route("articles") }}">
            Articles
        </a>
    </navbar>

</header>
@yield("content")

@yield("footer")
@include('sweetalert::alert')
<script type="module" src="{{ asset("assets/home/js/App.js") }}"></script>
</body>
</html>
