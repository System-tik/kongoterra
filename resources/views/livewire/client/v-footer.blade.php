<div id="footer" class="w-full text-white bg-gray-900">
    <div class="px-5 py-5  lg:pt-20 2xl:px-64 lg:px-5 md:px-24 xl:px-24">

        <section class="splide" aria-labelledby="carousel-heading">
            <h2 class="text-2xl pb-20 font-extrabold">Nos partenaires</h2>                
            <div class="splide__track">
                <ul class="splide__list">
                    @foreach ($partenaires as $part)
                    <li class="splide__slide">

                        <a class="flex flex-col justify-center items-center gap-4 text-center" href="{{$part->url}}" target="_blanc">
                            <img src="{{asset(Storage::url('public/partenaires/'.$part->id.'.png'))}}" class="w-40 h-40">
                            <p>
                                {{$part->nom}}
                            </p>
                        </a>  
                    </li>
                    
                    @endforeach
                </ul>
            </div>
          </section>
        {{-- <h1 class="text-xl">Nos partenaires</h1>
        <div class="slider">
            <div class="slide-track grid grid-cols-4 gap-16">
                @foreach ($partenaires as $part)
                <div class="slide">
                    <a class="flex flex-col justify-center items-center gap-4" href="{{$part->url}}" target="_blanc">
                        <img src="{{asset(Storage::url('public/partenaires/'.$part->id.'.png'))}}" class="w-40 h-40">
                        {{$part->nom}}
                    </a>  
                </div>
                @endforeach
                
            </div>
        </div> --}}
    </div>
    

    <div class="grid w-full gap-10  lg:grid-cols-2 px-5 py-5  lg:pb-20 2xl:px-64 lg:px-5 md:px-24 xl:px-24">
        {{-- Partenaires --}}
        {{-- Success is as dangerous as failure. --}}
        @if (count($infos) > 0)
            
        <div class="flex flex-col">
            <div class="flex items-center gap-5 py-5 border-b border-gray-800">
                <a href="/">
                    <img src="{{asset('img/logo/logo.png')}}" alt="" class="w-20 transition duration-500 transform">
                </a>
                <div class="flex flex-col items-start justify-center" >
                    <h2>Kongoterra</h2>
                    <h3>Votre santé mérite le meilleur.</h3>
                </div>
            </div>
            <div class="py-5">
                <h1>Nous contacter</h1>
                @foreach ($infos as $inf)   
                @if ($inf->type !== "Social")    
                <div class="flex items-center gap-2 py-2">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1">
                            <path stroke-linecap="round" stroke-linejoin="round" d="{{ $inf->icon }}" />
                        </svg>
                    </div>
                    @switch($inf->type)
                        @case('Tel')
                            <a href="tel:{{$inf->contenu}}">{{ $inf->contenu }}</a>
                            @break
                        @case('Email')
                            <a href="mailto:{{$inf->contenu}}">{{ $inf->contenu }}</a>
                            @break
                        @case('Lien')
                            <a href="http://{{$inf->contenu}}" target="_blank">{{ $inf->contenu }}</a>
                            @break
                        @default
                            <p>{{ $inf->contenu }}</p>
                    @endswitch
                </div>
                @endif 
                @endforeach
            </div>
        </div>
        <div>
            <h1 class="text-lg lg:py-5">Suivez-nous sur :</h1>
            <div class="flex items-center pb-10 border-b border-gray-800 gap-7">
                @foreach ($infos as $inf)   
                @if ($inf->type == "Social")    
                <a href="{{$inf->contenu}}" id="" target="_blank">
                    <div class="p-1">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10 fill-current" viewBox="{{ explode('|', $inf->icon)[1] }}">
                            <path stroke-linecap="round" stroke-linejoin="round" d="{{ explode('|', $inf->icon)[0] }}" />
                        </svg>
                    </div>
                </a>
                @endif 
                @endforeach
                
            </div>
            <div class="flex items-center py-3 lg:py-10">
                <a href="#">
                    <img src="{{ asset('img/disponible-sur-Google-play.png') }}" alt="" class="w-56 ">
                </a>
            </div>
        </div>
        @endif
        
    </div>
    <div class="px-5 py-2 text-left text-white bg-gray-700 2xl:px-64 lg:px-5 md:px-24 xl:px-24 md:text-justify">
        {{-- Success is as dangerous as failure. --}}
        <p>&#9400; Kongoterra 2022, by : Systematik</p>
        
    </div>
    <script>
        document.addEventListener( 'DOMContentLoaded', function() {
            var splide = new Splide('.splide', {
                type   : 'loop',
                drag   : 'free',
                focus  : 'center',
                perPage: 4,
                autoScroll: {
                    speed: 1,
                },
                classes: {
                    arrows: '',
                    arrow : 'bg-transparent',
                    prev  : 'hidden',
                    next  : 'hidden',
                },
            }).mount( window.splide.Extensions );
            splide.mount();
        } );

    </script>
</div>
