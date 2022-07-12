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
</head>
<body class="antialiased">
    
</body>
</html>