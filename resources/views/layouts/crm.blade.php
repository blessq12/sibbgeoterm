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
        <div class="container-fluid">
            <div class="row">
                <div class="col-2">
                    <x-crm.sidebar></x-crm.sidebar>
                </div>
                <div class="col-10 pt-4">
                    <div class="row mb-4">
                        <div class="col-12">
                            <h3>@yield('title')</h3>
                            <hr>
                        </div>
                    </div>
                    @yield('content')
                </div>
            </div>
        </div>
    </div>
</body>
</html>