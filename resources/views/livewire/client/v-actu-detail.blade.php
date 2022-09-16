<div class="grid grid-cols-1 px-5 py-10 text-left 2xl:px-64 lg:px-5 md:px-24 xl:px-24 2xl:grid-cols-6 xl:grid-cols-8">
    <div>

    </div>
    <div class="2xl:col-span-4 xl:col-span-6">
        <div style="" class="w-full">
            <div class="h-full">
    
                <div class="flex items-center justify-between w-full h-full " {{-- style="background: linear-gradient(90deg, rgba(255, 255, 255, 0.925) 0%, rgba(255,255,255,1) 35%, rgba(0, 0, 0, 0) 100%); --}} >
                    {{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}
                    {{-- <h4 class="w-full px-5 text-lg text-center lg:text-left">
                        Actualités <span class="font-bold">⸣</span>               
                    </h4> --}}
                    <h1 class="py-5 mt-2 text-xl font-bold text-center text-green-700 lg:text-left md:text-3xl xl:text-5xl">{{ $actus->titre }}</h1>
                    <span class="text-gray-400 ">{{ $actus->created_at }}</span>
                </div>
    
            </div>
        </div>
        <div class="">
            <div>
                <img src="{{asset(Storage::url('public/actus/'.$actus->id.'.png'))}}?{{ rand()}}" class="w-full">
            </div>
            <div class="w-full ">
                <div class="" >
                    <p class="py-5 pb-10 text-xl text-justify">{{$actus->descrip}}</p>
                </div>
                @if ($actus->source == "FB")
                <iframe src="{{$actus->lien}}" class="w-full"  height="436" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
                
                @else
                @if ($actus->source == "YT")
                <iframe  height="400" class="w-full" src="https://www.youtube.com/embed/{{$actus->lien}}" title="Flutter Tutorial - Check Internet Connection in Flutter" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    
                @else    
                @endif
                
                @endif
            </div>
        </div>
    </div>
    <div>

    </div>

</div>
