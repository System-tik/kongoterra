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
        <style>
            body{
                scroll-behavior: smooth;
            }
        </style>
        @livewireStyles

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body onload="preloader()"  x-data="{isScrollAtTop: true}" x-init="window.scrollTo({top: 0, behavior: 'smooth'})" class="w-screen overflow-x-hidden">
        <div class="fixed top-0 flex items-center justify-center w-screen h-screen bg-white" style="z-index: 999;" id="loading">
            <img src="{{asset('img/logo/logo_icon.png')}}" alt="" srcset="" class=" md:w-36 animate__fadeOut animate__animated animate__slow w-28 animate__infinite infinite">
        </div>
        <livewire:client.v-nav />
        @yield('client')
        <button  x-data @click="window.scrollTo({top: 0, behavior: 'smooth'})" class="fixed bottom-0 px-10 py-2 text-white transition duration-500 bg-gray-700 right-1 hover:bg-slate-800">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M5 15l7-7 7 7" />
            </svg>
        </button>
        <livewire:client.v-footer>
        
        @livewireScripts
        <script>
            var loading = document.getElementById('loading');
            function preloader() {
                loading.style.display = "none";
            }
            window.scrollIntoView({ behavior: 'smooth' })
        </script>
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
         <script>
         $(document).ready(function(){
           // Add smooth scrolling to all links
           $("a").on('click', function(event) {
         
             // Make sure this.hash has a value before overriding default behavior
             if (this.hash !== "") {
               // Prevent default anchor click behavior
               event.preventDefault();
         
               // Store hash
               var hash = this.hash;
         
               // Using jQuery's animate() method to add smooth page scroll
               // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
               $('html, body').animate({
                 scrollTop: $(hash).offset().top
               }, 800, function(){
         
                 // Add hash (#) to URL when done scrolling (default click behavior)
                 window.location.hash = hash;
               });
             } // End if
           });
         });
         </script> 
    </body>
</html>
