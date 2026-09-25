<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" class="dark">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ $meta['title'] }}</title>
        <meta name="description" content="{{ $meta['description'] }}">

        @fonts

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="bg-white text-slate-900 antialiased dark:bg-slate-950 dark:text-slate-100">

        <x-home.header :nav="config('portfolio.nav')" />

        <x-home.hero :hero="$hero" :social="config('portfolio.social')" />

        <x-home.about :about="$about" />

        <x-home.experience :jobs="$jobs" />

        <x-home.skills :skills="$skills" />

        <x-home.education :schools="$schools" />

        <x-home.contact :contact="$contact" />

        <x-home.footer :social="config('portfolio.social')" />
    </body>
</html>
