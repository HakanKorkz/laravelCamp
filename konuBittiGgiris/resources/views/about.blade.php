<!doctype html>
<html lang="{{ str_replace("-","-",app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> {{ config("app.name","LARAVEL") }} </title>
</head>
<body>

Merhaba ben {{ $userName }} {{ $userLastName }}. {{ $age }} Yaşında bir web programer yazılımcısıyım

</body>
</html>
