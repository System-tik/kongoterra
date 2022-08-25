<div id="footer" class="w-full">

    <div class="grid w-full gap-10 px-5 py-5 text-white bg-gray-900 lg:py-20 xl:px-72 lg:px-32 md:px-24 lg:grid-cols-2">
        {{-- Success is as dangerous as failure. --}}
        @if (count($infos) > 0)
            
        <div class="flex flex-col">
            <div class="flex items-center gap-5 py-5 border-b border-gray-800">
                <div>
                    <img src="{{asset('img/logo/logo.png')}}" alt="" class="transition duration-500 transform w-28">
                </div>
                <div class="flex flex-col items-start justify-center" >
                    <h2>Kongoterra</h2>
                    <h3>Pour une santé saine et équilibrée</h3>
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
    <div class="px-5 py-2 text-center text-white bg-gray-700 xl:px-72 lg:px-32 md:px-24 md:text-justify">
        {{-- Success is as dangerous as failure. --}}
        <p>&#9400; Kongoterra 2022,  by : Systematik|Facking</p>
        
    </div>
</div>
