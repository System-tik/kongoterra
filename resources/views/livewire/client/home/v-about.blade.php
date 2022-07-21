{{-- Principes --}}
<div class="flex flex-col py-5 bg-gray-900 xl:px-72 lg:px-32 md:px-24" id="about">
    <h1 class="py-10 text-3xl text-center text-white">Decouvrir nos principes</h1>
    
    <div class="grid grid-cols-2 pb-10 text-2xl text-gray-200 lg:grid-cols-4">
        @foreach ($abouts[4]["sous"] as $ss)
            
        <a href="{{ route('about', ['id'=> $abouts[4]['id']]) }}" class="flex flex-col items-center justify-center gap-5 text-white hover:text-yellow-100">
            <div class="p-5 text-yellow-400 bg-green-600 rounded-full">
                <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"></path></svg>
            </div>
            <p class="text-lg text-center">{{ explode(":", $ss)[0] }}</p>
        </a>
        @endforeach        
        
    </div>
    
</div>

