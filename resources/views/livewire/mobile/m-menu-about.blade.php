<div class="relative flex flex-col">
    {{-- Nothing in the world is as soft and yielding as water. --}}    
    <div class="px-5 md:px-32">
        
        <div class="flex justify-between">
            <p class="py-3"><b>A propos de nous</b></p>
        </div>
        
        <div class="overflow-x-auto" >
            <div class="grid grid-cols-4 gap-4" {{-- style="width:110vw;" --}}>
                @foreach ($navs as $nav)    
                <a href="#" class="w-full bg-cover rounded-xl" style="background-image:url('{{asset('img/mobile/inf'.($loop->index+1).'.jpg')}}'); height:80px;" >
                    <div class="flex flex-col items-center justify-center w-full h-full rounded-xl" style="background-color: rgba(0, 0, 100, .4)">
                        <p class="text-lg font-bold text-white">{{$nav}}</p>
                    </div>
                    {{-- Because she competes with no one, no one can compete with her. --}}
                </a>        
                @endforeach
                <a href="#" class="w-full bg-cover rounded-xl" style="background-image:url('{{asset('img/mobile/inf5.jpg')}}'); height:80px;" >
                    <div class="flex flex-col items-center justify-center w-full h-full rounded-xl" style="background-color: rgba(0, 0, 100, .4)">
                        <p class="text-lg font-bold text-white">Plus</p>
                    </div>
                    {{-- Because she competes with no one, no one can compete with her. --}}
                </a>    
            </div>
        </div>
            
            
    </div>
</div>


