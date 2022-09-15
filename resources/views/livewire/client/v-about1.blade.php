<<<<<<< HEAD

<div class="">
    <div style=" background-image:url('{{asset('img/fond/28117669335_529a14633f_b.jpg')}}')" class="object-cover w-full h-40">
        <div class="flex flex-col items-center justify-center w-full h-full px-5 py-10 text-left 2xl:px-64 lg:px-5 md:px-24 xl:px-24" style="background: linear-gradient(90deg, rgba(255, 255, 255, 0.925) 0%, rgba(255,255,255,1) 35%, rgba(0, 0, 0, 0) 100%); ">
=======
<div class="mt-48">
    <div style="background-image:url('{{asset('img/fond/africankids.jpeg')}}');" class="bg-cover w-full h-40 bg-no-repeat">
        <div class="flex flex-col items-center text-white justify-center w-full h-full px-5 py-10 text-left 2xl:px-64 lg:px-5 md:px-24 xl:px-24" {{-- style="background: linear-gradient(90deg, rgba(255, 255, 255, 0.925) 0%, rgba(255,255,255,1) 35%, rgba(0, 0, 0, 0) 100%); --}} ">
>>>>>>> e22fe7aa5799bb89dbab93e4efbdd3090e90b7dc
            {{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}
            <h4 class="w-full text-md text-center lg:text-left">
                A propos <span class="font-bold">⸣</span>               
            </h4>
            <h1 class="w-full text-center lg:text-left lg:text-3xl font-bold mt-2">{{ $abouts->titre }}</h1>
        </div>
    </div>
    <div class="flex flex-col items-center w-full px-5 text-left 2xl:px-64 lg:px-5 md:px-24 xl:px-24" style="background: linear-gradient(180deg, rgba(255, 255, 255, 0.925) 0%, rgba(255,255,255,1) 35%, rgba(0, 129, 28, 0.082) 100%); ">
        <div class="grid w-full pt-5">
            <div class="" {{-- style="background: linear-gradient(180deg, rgba(255, 255, 255, 0.925) 0%, rgba(255,255,255,1) 35%, rgba(0, 129, 28, 0.685) 100%); " --}}>
                @if ($abouts->descrip != '0')   
                <p class="py-5 font-bold text-2xl text-left">{{$abouts->descrip}}</p>
                @endif
                <div class="flex flex-col items-center justify-center font-serif p-4 mb-5">
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
