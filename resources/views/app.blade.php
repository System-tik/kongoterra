<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Kongoterra</title>
        <link rel="icon" href="{{ asset('img/logo/logo_icon.png') }}" type="image/icon type">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/animate.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/mon.css') }}">
        @livewireStyles

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body x-data="{isScrollAtTop: true}" x-init="window.scrollTo({top: 0, behavior: 'smooth'})">
        <livewire:client.v-nav />
        @yield('client')
        <button  x-data @click="window.scrollTo({top: 0, behavior: 'smooth'})" class="fixed bottom-0 px-10 py-2 text-white transition duration-500 bg-gray-700 right-1 hover:bg-slate-800">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M5 15l7-7 7 7" />
            </svg>
        </button>
        <livewire:client.v-footer>
        @livewireScripts
        
    </body>
</html>
