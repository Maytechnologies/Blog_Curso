<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('titulo')</title>
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
</head>
<!--Section of Stylus-->
<style>
    .active{
        color: red;
        font-weight: bold;
    }
</style>
<body>

    <!--Header-->
    @include('layouts.partials.header')
   <br>
   <!--Content of the page-->
    @yield('content')

    <!--Section of Footer-->
    @include('layouts.partials.footer')
</body>
</html>