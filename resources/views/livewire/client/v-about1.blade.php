
<div class="mt-48">
    <div style=" background-image:url('{{asset('img/fond/28117669335_529a14633f_b.jpg')}}')" class="object-cover w-full h-40">
        <div class="flex flex-col items-center justify-center w-full h-full px-5 py-10 text-left xl:px-72 lg:px-32 md:px-24" style="background: linear-gradient(90deg, rgba(255, 255, 255, 0.925) 0%, rgba(255,255,255,1) 35%, rgba(0, 0, 0, 0) 100%); ">
            {{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}
            <h1 class="w-full text-xl text-center lg:text-left lg:text-3xl">A PROPOS DE KONGOTERRA</h1>
        </div>
    </div>
    <div class="flex flex-col items-center w-full px-5 text-left xl:px-72 lg:px-32 md:px-24" style="background: linear-gradient(180deg, rgba(255, 255, 255, 0.925) 0%, rgba(255,255,255,1) 35%, rgba(0, 129, 28, 0.082) 100%); ">
        <div class="grid w-full pt-5 lg:grid-cols-5">
            <div class="flex items-center justify-center w-full bg-red-300 lg:col-span-2">
                <img src="{{ asset('img/fffffffff.jpg') }}" alt="" srcset="">
            </div>
            <div class="flex flex-col items-center justify-center lg:col-span-3 " {{-- style="background: linear-gradient(180deg, rgba(255, 255, 255, 0.925) 0%, rgba(255,255,255,1) 35%, rgba(0, 129, 28, 0.685) 100%); " --}}>
                <p class="pb-3 text-lg font-bold border-b">{{$abouts->titre}}</p>
                @if ($abouts->descrip != '0')   
                <p class="py-5">{{$abouts->descrip}}</p>
                @endif
                @if ($abouts->sous != null)
                <div class="flex flex-col gap-5 px-5 py-5">
                    @foreach ($abouts->sous as $abt)
                    <p class="text-justify "><b># </b> {{$abt}}</p>
                    @endforeach
                </div>
                @endif
            </div>
            
        </div>
    </div>

</div>
