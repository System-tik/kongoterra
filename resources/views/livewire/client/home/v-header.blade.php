<div class="flex flex-col items-center justify-center" x-data="{
    about:[true, false, false],
    aff(index){
        for (let i = 0; i < this.about.length; i++){
            if (i == index) this.about[i] = true
            else this.about[i] = false
        }
    }
}">
    @if (count($abouts) > 0)    
    <div class="w-screen bg-cover" style="background-image:url('{{ asset('img/fond/ac.jpg') }}'); height:60vh;" >
        <div class="flex flex-col justify-center w-full h-full px-5 text-white 2xl:px-64 lg:px-5 md:px-24 xl:px-24" style="background-color: rgba(0, 0, 0, .3)">
            <h1 class="px-5 py-2 text-4xl text-center lg:py-5 lg:text-justify">KONGOTERRA</h1>
            <p class="hidden px-5 py-2 text-lg text-justify lg:py-5 animate__animated animate__fadeInRight lg:block" x-show="about[0]" style="background-color: ">
                {{$abouts[0]->descrip}}
            </p>
            <p class="block px-5 py-2 text-lg text-justify lg:py-5 animate__animated animate__fadeInRight lg:hidden" x-show="about[0]" style="background-color: ">
                {{ substr($abouts[0]->descrip, 0, 200) }}... <a href="{{route('about', 1)}}" class="text-green-400">Lire plus.</a>
            </p>
            <p class="px-5 py-2 text-lg text-justify lg:py-5 animate__animated animate__fadeInRight" x-show="about[1]" style="background-color: ">
                {{ $abouts[1]->descrip }}
            </p>
            <p class="px-5 py-2 text-lg text-justify lg:py-5 animate__animated animate__fadeInRight" x-show="about[2]" style="background-color: ">
                {{ $abouts[2]->descrip }}
            </p>
        </div>
    </div>
    @endif
    <div class="flex {{-- flex-col --}} items-center w-full  lg:text-2xl text-gray-200 lg:flex-row justify-between px-10 md:justify-center lg:gap-52" style="height:25vh;">
        <button class="flex flex-col items-center justify-center gap-5 text-gray-500 " @click="aff(0)">
            <div class="p-5 text-white bg-green-600 rounded-full">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
            </div>
            <p>Kongoterra</p>
        </button>
        <button class="flex flex-col items-center justify-center gap-5 text-gray-500" @click="aff(1)">
            <div class="p-5 text-white bg-green-600 rounded-full">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
            </div>
            <p>Vision</p>
        </button>
        <button class="flex flex-col items-center justify-center gap-5 text-gray-500" @click="aff(2)">
            <div class="p-5 text-white bg-green-600 rounded-full">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
            </div>
            <p>Notre But</p>
        </button>       
    </div>
</div>
