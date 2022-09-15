<div class="">

    <div style="background-image:url('{{asset('img/header/art.jpg')}}');" class="w-full h-56 bg-no-repeat bg-cover lg:h-72">
        <div class="h-full bg-t-black">

            <div class="flex flex-col items-center justify-center w-full h-full px-5 py-10 text-left text-white 2xl:px-64 lg:px-5 md:px-24 xl:px-24" {{-- style="background: linear-gradient(90deg, rgba(255, 255, 255, 0.925) 0%, rgba(255,255,255,1) 35%, rgba(0, 0, 0, 0) 100%); --}} >
                {{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}
                <h4 class="w-full text-lg text-center lg:text-left">
                    A propos <span class="font-bold">⸣</span>               
                </h4>
                <h1 class="w-full mt-2 text-xl font-bold text-center lg:text-left md:text-3xl">{{ $abouts->titre }}</h1>
            </div>
        </div>
    </div>
    <div class="flex flex-col items-center w-full px-5 text-left 2xl:px-64 lg:px-5 md:px-24 xl:px-24" style="background: linear-gradient(180deg, rgba(255, 255, 255, 0.925) 0%, rgba(255,255,255,1) 35%, rgba(0, 129, 28, 0.082) 100%); ">
        <div class="grid w-full pt-5">
            <div class="" {{-- style="background: linear-gradient(180deg, rgba(255, 255, 255, 0.925) 0%, rgba(255,255,255,1) 35%, rgba(0, 129, 28, 0.685) 100%); " --}}>
                @if ($abouts->descrip != '0')   
                <p class="py-5 text-2xl text-justify">{{$abouts->descrip}}</p>
                @endif
                <div class="flex flex-col p-4 mb-5 ">
                    @if ($abouts->sous != null)
                    <div class="flex flex-col gap-5 py-5">
                        @foreach ($abouts->sous as $abt)
                        <p class="text-justify "><b>✔</b> {{$abt}}</p>
                        @endforeach
                    </div>
                    @endif
                </div>
            </div>
            
        </div>
    </div>

</div>
