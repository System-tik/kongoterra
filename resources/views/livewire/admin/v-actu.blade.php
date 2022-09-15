<div x-data="{
    modal : false,
    message : 'Êtes-vous sûr de vouloir ',
    save : true,
    update : false,
    del : false,
    notifU : false,
    init(){
        //console.log(this.notifU);
        window.addEventListener('crud', event => {
            setTimeout(() => {
                this.notifU = true;
            }, 200);
            setTimeout(() => {
                this.notifU = false;
            }, 3000);
        });
    }
}" x-init="init()">
{{--     <input type="text" wire:model="titre" placeholder="titre">
    @error('titre') <span class="text-red-600">{{$message}}</span><br> @enderror
    <input type="text" wire:model="descrip" placeholder="descrip">
    @error('descrip') <span class="text-red-600">{{$message}}</span><br> @enderror
    <input type="text" wire:model="lien" placeholder="lien">
    @error('lien') <span class="text-red-600">{{$message}}</span><br> @enderror
    <input type="text" wire:model="source" placeholder="source">
    @error('source') <span class="text-red-600">{{$message}}</span><br> @enderror
    
    <button wire:click="add">add</button>
    <button wire:click="update">update</button>
    @error('idUnique1') <span class="text-red-600">{{$message}}</span><br> @enderror
    <button wire:click="delete">delete</button>
    <button wire:click="clear">clear</button>
    @error('idUnique2') <span class="text-red-600">{{$message}}</span><br> @enderror --}}

    {{-- @foreach ($actus as $actu)
    <p wire:click="recupere({{ $actu }})">{{ $actu->titre }}</p>
    @endforeach --}}

    {{-- <script>
        window.addEventListener('confirm',event => {
            console.log(event.detail.message);
        })
        window.addEventListener('echec',event => {
            console.log(event.detail.message);
        })

    </script>
 --}}
    <div class="grid h-full grid-cols-3 gap-3">
        <div class="h-full p-4 rounded bg-gray-50">
            <h1 class="py-2 text-xl font-bold">Mise à jour | Actualités</h1>
            <hr>
            <div class="grid grid-rows-4 gap-4 pt-2">
                <div class="">
                    <label class="">Titre</label>
                    <input type="text" class="w-full p-2" placeholder="Titre de l'actu" wire:model="titre">
                    @error('titre') <span class="text-red-600">{{$message}}</span><br> @enderror
                </div>
                <div class="">
                    <label class="">Description</label>
                    <input type="text" class="w-full p-2" placeholder="Description de l'actu" wire:model="descrip">
                    @error('descrip') <span class="text-red-600">{{$message}}</span><br> @enderror
                </div>
                <div class="">
                    <label class="">Lien</label>
                    <input type="text" class="w-full p-2" placeholder="Lien de l'actu" wire:model="lien">
                    @error('lien') <span class="text-red-600">{{$message}}</span><br> @enderror
                </div>
                <div class="flex flex-col">
                    <label class="">Source</label>
                    <select name="" id="" wire:model="source" class="w-full mt-2 bg-white">
                        <option>Choisir la source</option>
                        <option value="FB">Facebook</option>
                        <option value="YT">Youtube</option>
                    </select>
                    @error('source') <span class="text-red-600">{{$message}}</span><br> @enderror
                </div>
            </div>
            <div class="grid grid-cols-2 gap-4 py-2 bg-white">
                <button class="px-3 py-2 text-lg font-bold text-white bg-green-600" @click="modal=true;add=true;update=false;del=false">Enregistrer</button>        
                <button class="px-3 py-2 text-lg font-bold text-white bg-yellow-600" @click="modal=true;save=false;update=true;del=false;">Modifier</button>        
                <button class="px-3 py-2 text-lg font-bold text-white bg-red-900" @click="modal=true;save=false;update=false;del=true;">Supprimer</button>
                <button class="text-lg font-bold text-white bg-gray-500 -3" wire:click="clear">Clear</button>        
            </div>
        </div>
       
        {{-- affichage des informations --}}
        <div class="col-span-2 p-4 rounded bg-gray-50">
            <h1 class="py-2 text-xl font-bold">Actualités de Kongoterra</h1>
            <hr>
            <div class="grid w-full grid-cols-2 gap-4 py-3">
                @forelse ($actus as $actu)
                    <div class="flex rounded shadow cursor-pointer " wire:click="fillInputs({{ $actu }})">
                        <div class="flex items-center justify-center p-4 text-white bg-slate-500">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 21a9.004 9.004 0 008.716-6.747M12 21a9.004 9.004 0 01-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a8.997 8.997 0 017.843 4.582M12 3a8.997 8.997 0 00-7.843 4.582m15.686 0A11.953 11.953 0 0112 10.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 0121 12c0 .778-.099 1.533-.284 2.253m0 0A17.919 17.919 0 0112 16.5c-3.162 0-6.133-.815-8.716-2.247m0 0A9.015 9.015 0 013 12c0-1.605.42-3.113 1.157-4.418" />
                            </svg>                              
                        </div>
                        <div class="flex-1 px-2">
                            <p>{{ $actu->titre }} </p>
                            <p>{{ substr($actu->descrip,0,35) }}...</p>
                        </div>
                    </div>
                @empty
                    <div class="flex items-center justify-center">
                        <p>Pas des données disponible pour l'instant !</p>
                    </div>
                @endforelse
            </div>
        </div>
    {{-- Modals --}}
    <div x-show="modal" @click="modal=false;" x-transition.500ms>
        <x-admin.crudmodal >
            <p class="px-20 text-xl">
                <span x-text="message"></span>
                <span x-show="save">enregistrer</span>
                <span x-show="update">modifier</span>
                <span x-show="del">supprimer</span>
            </p>
            <hr>
            <div class="flex w-full p-2">
                <button class="flex-1 px-3 py-2 text-lg font-bold text-white bg-blue-900 hover:bg-blue-700"   x-show="save" wire:click="store">Enregistrer</button>        
                <button class="flex-1 px-3 py-2 text-lg font-bold text-white bg-yellow-600 hover:bg-yellow-400"   x-show="update" wire:click="update">Modifier</button>        
                <button class="flex-1 px-3 py-2 text-lg font-bold text-white bg-red-900 hover:bg-red-700"  x-show="del" wire:click="delete">Supprimer</button>
                <button class="flex-1 px-3 py-2 text-lg font-bold text-white bg-gray-500 hover:bg-gray-700" >Annuler</button>
            </div>
        </x-admin.crudmodal>
    </div>
    <div class="absolute top-0 left-0 w-full bg-black" id="notif4" x-show="notifU">
        <div class="flex p-2 text-white bg-purple-600">
            <p class="flex-1">{{ session('message') }}</p>
            <button>X</button>
        </div>
    </div>
    
</div>
