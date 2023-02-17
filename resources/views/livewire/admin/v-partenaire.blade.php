{{-- <div>
    <div>
        <input type="text" wire:model="nom">
        <input type="text" wire:model="url">  
    </div>

    <div>
        <button wire:click="store">Ajouter</button>
        <button wire:click="update">Modifier</button>
        <button wire:click="delete">Supprimer</button>
        <button wire:click="clear">Clear</button>
    </div>
    
    

    <div>
        <h1>Nos parténaires</h1>

        @forelse ($partenaires as $partenaire)
            <span wire:click="select({{$partenaire}})">{{$partenaire->nom}}</span>
        @empty
            <span>Aucun parténaire enregistré.</span>
        @endforelse
    </div>
</div> --}}




<div class="grid h-full grid-cols-3 gap-3">
    <div class="h-full p-4 rounded bg-gray-50">
        <h1 class="py-2 text-xl font-bold">Mise à jour | Partenaires</h1>
        <hr>
        <div class="grid grid-rows-4 gap-4 pt-2">
            <div class="">
                <label class="">Nom</label>
                <input type="text" class="w-full p-2" placeholder="Nom du partenaire" wire:model="nom">
                @error('nom') <span class="text-red-600">{{$message}}</span><br> @enderror
            </div>
            <div class="">
                <label class="">Url</label>
                <input type="text" class="w-full p-2" placeholder="Url du partenaire" wire:model="url">
                @error('url') <span class="text-red-600">{{$message}}</span><br> @enderror
            </div>

            <div class="flex w-full gap-5 py-2">
                {{-- Button ajouter gallerie des dans images --}}
                <label class="flex flex-col items-center justify-center w-full px-4 py-1 tracking-wide text-purple-600 uppercase transition-all duration-150 ease-linear bg-white border rounded-md shadow-md cursor-pointer border-blue hover:bg-purple-600 hover:text-white">
                    <span class="px-3 mt-2 text-base leading-normal">image logo</span>
                    <input type="file" class="hidden" wire:model="logo" />
                    <div x-show="isUploading" class="h-full">
                        <progress max="100" x-bind:value="progress">
                            <b x-text="progress"></b>%
                        </progress>
                    </div>
                </label>
            </div>

        </div>
        <div class="grid grid-cols-2 gap-4 py-2 bg-white">
            <button class="px-3 py-2 text-lg font-bold text-white bg-green-600" wire:click="store">Enregistrer</button>        
            <button class="px-3 py-2 text-lg font-bold text-white bg-yellow-600" wire:click="update">Modifier</button>        
            <button class="px-3 py-2 text-lg font-bold text-white bg-red-900" wire:click="delete">Supprimer</button>
            <button class="text-lg font-bold text-white bg-gray-500 -3" wire:click="clear">Clear</button>        
            @error('selectedId') <span class="text-red-600">{{$message}}</span><br> @enderror
        </div>
    </div>
   
    {{-- affichage des informations --}}
    <div class="col-span-2 p-4 rounded bg-gray-50">
        <h1 class="py-2 text-xl font-bold">Partenaires de Kongoterra</h1>
        <hr>
        <div class="grid w-full grid-cols-3 gap-4 py-3">
            @forelse ($partenaires as $partenaire)
            <div class="flex flex-col rounded shadow cursor-pointer" wire:click="select({{ $partenaire }})">
                <div class="flex items-center justify-center text-white bg-slate-500 ">
                    <img src="{{asset(Storage::url('public/partenaires/'.$partenaire->id.'.png'))}}" class="w-40 h-40">
                </div>
                    <div class="flex-1 px-2 py-2">
                        <p class="text-xl">Nom: {{ $partenaire->nom }} </p>
                        <p class="text-xl">Url: {{ $partenaire->url }}</p>
                    </div>
                </div>
            @empty
                <div class="flex items-center justify-center">
                    <p>Pas des données disponible pour l'instant !</p>
                </div>
            @endforelse
        </div>
    </div>

</div>

