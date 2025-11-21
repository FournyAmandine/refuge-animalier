<!doctype html>
<html lang="{!! app()->getLocale() !!}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Amandine Fourny">
    <meta name="description" content="Site pour un refuge animalier">
    <meta name="keywords" content="refuge, animal, adoption, charly">
    <title>{!! $title_page !!}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-orange-50">
    <x-public.structure.header/>
    {!! $slot !!}
    <x-public.structure.footer/>
</body>
</html>
