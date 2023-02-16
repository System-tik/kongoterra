<div class="">

    <div style="background-image:url('{{asset(Storage::url('public/service/'.$services->id.'.png'))}}?{{ rand()}}');" class="w-full h-56 bg-no-repeat bg-cover lg:h-72">
        <div class="h-full bg-t-black flex flex-col">

            <div class="flex flex-col items-center justify-center w-full h-full px-5 py-10 text-left text-white 2xl:px-64 lg:px-5 md:px-24 xl:px-24" {{-- style="background: linear-gradient(90deg, rgba(255, 255, 255, 0.925) 0%, rgba(255,255,255,1) 35%, rgba(0, 0, 0, 0) 100%); --}} >
                {{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}
                <h4 class="w-full text-lg text-center lg:text-left">
                    Service <span class="font-bold">⸣</span>               
                </h4>
                <h1 class="w-full mt-2 text-xl font-bold text-center lg:text-left md:text-3xl">{{ $services->nom }}</h1>
            </div>
            <div class=" ">
                <div class="flex justify-end 2xl:px-64 lg:px-5 md:px-24 xl:px-24 py-3 gap-3">
                    @foreach ($servs as $ser)
                    <a href="{{route('service', $ser->id)}}" class="text-white rounded-full px-5  {{($idS == $ser->id) ? 'border-2 bg-t-green' : 'border-2 bg-t-black'}}" >{{ $loop->index + 1 }}</a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <div class="flex flex-col items-center w-full px-5 text-left 2xl:px-64 lg:px-5 md:px-24 xl:px-24" style="background: linear-gradient(180deg, rgba(255, 255, 255, 0.925) 0%, rgba(255,255,255,1) 35%, rgba(0, 129, 28, 0.082) 100%); ">
        <div class="grid w-full pt-5">
            <div class="" {{-- style="background: linear-gradient(180deg, rgba(255, 255, 255, 0.925) 0%, rgba(255,255,255,1) 35%, rgba(0, 129, 28, 0.685) 100%); " --}}>
                @if ($services->descrip != '0')   
                <p class="py-5 text-2xl text-justify">{{$services->descrip}}</p>
                @endif
                <div class="flex flex-col py-4 mb-5 font-serif">
                    @if ($services->sous != null)
                    <div class="flex flex-col gap-5 py-5">
                        @foreach ($services->sous as $abt)
                        <p class="text-justify "><b>✔</b> {{$abt}}</p>
                        @endforeach
                    </div>
                    @endif
                </div>
            </div>
            
        </div>
    </div>


</div>
