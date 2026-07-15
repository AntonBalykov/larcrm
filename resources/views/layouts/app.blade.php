<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <title>
        @yield('title', 'CRM')
    </title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('themes/huro/css/app.css') }}">
</head>

<body>

<div class="wrapper">

    @include('layouts.components.sidebar')

    <main>
        @yield('content')
    </main>

</div>
<script src="{{ asset('themes/huro/js/app.js') }}"></script>
</body>

</html>
