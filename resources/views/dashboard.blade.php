<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet">
    <link href="/css/app.css" rel="stylesheet"> <!-- Assuming you have a separate CSS file -->
</head>
<body class="antialiased bg-gray-100 dark:bg-gray-900">

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-1 gap-6 lg:gap-8">
               sdsda
                <!-- Repeat the above structure for other links -->
            </div>
        </div>
    </div>
</x-app-layout>

<script src="/js/app.js"></script> <!-- Assuming you have a separate JS file -->
</body>
</html>
