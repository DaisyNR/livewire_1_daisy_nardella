<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>FilmZone</title>
    @vite(['resources/css/app.css', 'resources/js/app.js']);
  </head>
  <body class="mt-5">
    <x-navbar/>
    {{$slot}}
  </body>
</html>