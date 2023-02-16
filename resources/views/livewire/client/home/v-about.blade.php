{{-- Principes --}}
<div class="flex flex-col py-5 bg-gray-900 2xl:px-64 lg:px-5 md:px-24 xl:px-24" id="about">
    <h1 class="py-10 text-lg text-center text-white md:text-3xl">Decouvrir nos produits</h1>
    
    <div class="grid grid-cols-2 pb-10 text-gray-200 lg:grid-cols-4">
        @if (count($abouts) > 0)  
        @foreach ($abouts as $ab)
        @if (strpos($ab->titre, 'principes') != false)
            
        @foreach ($ab->sous as $ss)
            
        <a href="{{ route('about', ['id'=> $ab->id]) }}" class="flex flex-col items-center justify-center gap-5 mb-5 text-white hover:text-yellow-100 md:mb-0">
            <div class="p-2 text-yellow-400 bg-green-600 rounded-full lg:p-5">
                <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"></path></svg>
            </div>
            <p class="text-center md:text-lg">{{ explode(":", $ss)[0] }}</p>
        </a>
        @endforeach        
        @endif
        @endforeach  
        @endif
        
    </div>
    
</div>

