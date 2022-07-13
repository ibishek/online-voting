<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        @hasSection('title')
            {{ config('app.name') }} - @yield('title')
        @else
            {{ config('app.name') }}
        @endif
    </title>
    @vite('resources/css/app.css', 'resources/js/app.js')
</head>
<body class="antialiased">
    @include('layout.header')
    <div class="w-full  flex lg:max-w-screen-xl bg-gray-100 lg:rounded-2xl mx-auto lg:mt-10 lg:shadow-md">
        <aside class="hidden p-6 px-4 sm:block bg-gradient-to-b from-blue-700 via-blue-800 to-gray-900 lg:rounded-tl-2xl lg:rounded-bl-2xl">
            @include('layout.aside')
        </aside>
        <section>

        </section>
    </div>
</body>
</html>