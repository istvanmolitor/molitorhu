<!DOCTYPE html>
<html lang="hu" class="dark">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('portfolio.meta.title') }}</title>
        <meta name="description" content="{{ config('portfolio.meta.description') }}">

        @fonts

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="bg-white text-slate-900 antialiased dark:bg-slate-950 dark:text-slate-100">

        <x-home.header :nav="config('portfolio.nav')" />

        <x-home.hero :hero="config('portfolio.hero')" :social="config('portfolio.social')" />

        <x-home.about :about="config('portfolio.about')" />

        <x-home.experience :jobs="config('portfolio.experience')" />

        <x-home.skills :skills="config('portfolio.skills')" />

        <x-home.education :schools="config('portfolio.education')" />

        <x-home.contact :contact="config('portfolio.contact')" />

        <x-home.footer :social="config('portfolio.social')" />
    </body>
</html>
