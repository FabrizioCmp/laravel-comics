<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/js/app.js')
    <title>Document</title>
</head>
<body>
    @include("partials.header")
    {{-- nello yeld verrà inserito il contetnuto scritto nella section content(in questo caso nella pagina secondPage) --}}
    @yield("content")
    <h1>content</h1>
    @include("partials.footer")
</body>
</html>