<div class="flex flex-col ">
    {{-- Nothing in the world is as soft and yielding as water. --}}
    <div class="px-5 md:px-32">
        
        <div class="flex justify-between">
            <p class="py-3"><b>Produits</b></p>
            <a class="py-3 font-bold text-green-600" href="#">Voir tout</a>
        </div>
        
        <div class="overflow-x-auto" >
            <div class="grid grid-cols-4 gap-4 " style="width:200vw;">
                
                @foreach ($produits as $pr)
                <div {{-- id="slide-{{$pr->id}}" --}} class="w-full">
                    <livewire:mobile.components.c-produit :produit="$pr">    
                </div>
                @endforeach
            </div>
        </div>
            
            
    </div>
</div>
