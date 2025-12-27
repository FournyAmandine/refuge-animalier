<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Amandine Fourny">
    <meta name="keywords" content="Refuge animalier, animaux, refuge, adoption, adopter">
    <meta name="description" content="Site web pour le refuge animalier&nbsp;: Les Pattes Heureuses">
    <title>{{ $title ?? config('app.name') }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="lg:flex lg:relative">
<header>
    <h1 class="sro">Header du login</h1>
</header>
{{ $slot }}
<footer>
    <h2 class="sro">Footer du login</h2>
</footer>
</body>
</html>
