<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ __('views.layout.title') }}</title>
        @vite('resources/sass/app.scss')
    </head>

    <body>
        <div class="container p-5">
            @include('flash::message')
            @yield('content')
        </div>
    </body>
</html>
