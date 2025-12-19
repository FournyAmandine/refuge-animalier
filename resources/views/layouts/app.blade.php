<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" x-data="{ modalOpen: false }"
      x-on:open-modal.window="modalOpen = true" x-on:close-modal.window="modalOpen = false"
      :class="modalOpen ?  'overflow-hidden' : ''"
>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>{{ $title ?? config('app.name') }}</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        @livewireStyles
    </head>
    <body class="lg:flex lg:relative">
        <livewire:admin.structure.header/>
        {{ $slot }}
        <livewire:widgets::modal />
    </body>
</html>
