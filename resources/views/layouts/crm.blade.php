<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    @include('includes::cdn')
    @vite('resources/sass/crm/app.sass')
</head>
<body>
    <div id="app">
        <x-crm.navbar></x-crm.navbar>
        @yield('content')
    </div>
</body>
</html>