<div class="px-5 py-32 xl:px-72 lg:px-32 md:px-24" id="services">
    {{-- Nothing in the world is as soft and yielding as water. --}}
    <h1 class="text-2xl font-bold">Nos services</h1>
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
    </div>
</div>
