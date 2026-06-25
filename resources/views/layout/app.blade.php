<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? config('app.name') }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @livewireStyles
</head>

<body class="bg-surface">
    <div x-data="{ sidebarCollapsed: false }" class="flex relative">

        <!-- <livewire:shared.sidebar /> -->

        <button
            x-show="sidebarCollapsed"
            x-on:click="sidebarCollapsed = false"
            class="fixed top-4 left-4 z-50 p-2 bg-gray-900 text-white rounded-lg shadow-lg hover:bg-gray-800 transition-all duration-200"
            style="display: none;">
            <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
        </button>

        <main
            class="flex-1 p-8 transition-all duration-300 ease-in-out"
            :class="{ 'ml-64': !sidebarCollapsed, 'ml-0': sidebarCollapsed }">
            {{ $slot }}
        </main>

    </div>

    @livewireScripts
</body>

</html>