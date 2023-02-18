<div id="services" class="bg-left bg-no-repeat bg-cover" style="background-image:url('{{asset('img/f3.jpg')}}')">
    {{-- Nothing in the world is as soft and yielding as water. --}}
    <div class="px-5 py-5 bg-gradient-to-r via-transparent to-black 2xl:px-64 lg:px-5 md:px-24 xl:px-24 from-black lg:from-transparent lg:via-white lg:to-white" data-aos="flip-right" data-aos-duration="1900">

        {{-- <h1 class="text-2xl font-bold">Nos services</h1>
        <hr>
        <div class="grid gap-10 py-5 lg:grid-cols-2">
            @if (count($services) > 0)
                
            @foreach ($services as $serv) 
            <div class="flex flex-col flex-1 p-3 shadow">
                <div class="flex items-center gap-4 py-2 border-b">
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <p>{{$serv->nom}}</p>
                </div>
                <p class="pt-5 text-justify">{{ $serv->descrip }}</p>
            </div>   
            @endforeach
            @endif
        </div> --}}
        <div class="grid grid-cols-1 lg:grid-cols-2">
            <div></div>
            <div class="flex flex-col items-center px-5 lg:items-start lg:px-0">
                <h1 class="pb-5 text-lg font-bold text-green-600 xl:text-5xl lg:text-2xl">Decouvrir nos services</h1>
                <ol class="relative border-l border-gray-200 dark:border-gray-700">
                    @if (count($services) > 0)
                        
                    @foreach ($services as $serv) 
                    <li class="mb-10 ml-6">
                        <div class="absolute w-3 h-3 bg-gray-200 rounded-full mt-1.5 -left-1.5 border border-white dark:border-gray-900 dark:bg-gray-700"></div>
                        <span class="absolute flex items-center justify-center w-6 h-6 bg-blue-200 rounded-full -left-3 ring-8 ring-white dark:ring-gray-900 dark:bg-blue-900">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-green-600 dark:text-blue-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </span>
                        <h3 class="flex items-center mb-1 text-lg font-semibold text-white lg:text-gray-900 dark:text-white ">{{$serv->nom}}<a href="{{route('service', $serv->id)}}" class="bg-blue-100 text-green-800 text-sm font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-blue-200 dark:text-blue-800 ml-3">Lire...</a></h3>
                        {{-- <time class="block mb-2 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">Released on January 13th, 2022</time> --}}
                        <p class="mb-4 text-base font-normal text-white lg:text-gray-500 dark:text-gray-400">{{substr($serv->descrip, 0, 100)}}...</p>   
                        {{-- <p class="pt-5 text-justify">{{ $serv->descrip }}</p> --}}
                    </li>   
                    @endforeach
                    @endif
                </ol>
            </div>
        </div>
    </div>
</div>
