<div x-data="{
    modal : false,
    message : 'Êtes-vous sûr de vouloir ',
    save : true,
    update : false,
    del : false,
    notifU : false
}">
    <div class="grid h-full grid-cols-3 gap-3">
        <div class="h-full p-4 rounded bg-gray-50">
            <h1 class="py-2 text-xl font-bold">Mise à jour Informations de Kongoterra</h1>
            <hr>
            <div class="grid grid-rows-4 gap-4 pt-2">
                <div class="">
                    <label class="">Titre</label>
                    <input type="text" class="w-full p-2 mt-2" placeholder="Titre de l'info" wire:model="titre">
                </div>
                <div class="">
                    <label class="">Contenu</label>
                    <input type="text" class="w-full p-2 mt-2" placeholder="Titre de l'info" wire:model="contenu">
                </div>
                <div class="flex flex-col">
                    <label class="">Type</label>
                    <select name="" id="" wire:model="type" class="w-full bg-white">
                        <option value="Tel">Tel</option>
                        <option value="Email">Email</option>
                        <option value="Lien">Lien</option>
                        <option value="Texte">Texte</option>
                        <option value="Social">Reseau social</option>
                    </select>
                </div>
                <div class="">
                    <label class="">Icone</label>
                    <input type="text" class="w-full p-2 mt-2" placeholder="Titre de l'info" wire:model="icon">
                </div>
            </div>
            <div class="grid grid-cols-2 gap-4 py-2 bg-white">
                <button class="px-3 py-2 text-lg font-bold text-white bg-green-600" @click="modal=true;save=true;update=false;del=false">Enregistrer</button>        
                <button class="px-3 py-2 text-lg font-bold text-white bg-yellow-600" @click="modal=true;save=false;update=true;del=false;">Modifier</button>        
                <button class="px-3 py-2 text-lg font-bold text-white bg-red-900" @click="modal=true;save=false;update=false;del=true;">Supprimer</button>
                <button class="text-lg font-bold text-white bg-gray-500 -3" wire:click="resetInputs" @click="descri='';titre='';id=0">Clear</button>        
            </div>
        </div>
        {{-- affichage des informations --}}
        <div class="col-span-2 p-4 rounded bg-gray-50">
            <h1 class="py-2 text-xl font-bold">Informations de Kongoterra</h1>
            <hr>
            <div class="grid w-full grid-cols-2 gap-4 py-3">
                @forelse ($infos as $inf)
                    <div class="flex rounded shadow cursor-pointer " wire:click="fillInputs({{$inf}})">
                        <div class="flex items-center justify-center p-4 text-white bg-slate-500">
                            @if ($inf->type == "Social")
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 fill-current" viewBox="{{ explode('|', $inf->icon)[1] }}">
                                <path stroke-linecap="round" stroke-linejoin="round" d="{{ explode('|', $inf->icon)[0] }}" />
                            </svg>
                            @else
                                
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="{{ explode('|', $inf->icon)[1] }}" stroke="currentColor" stroke-width="1.5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="{{ explode('|', $inf->icon)[0] }}" />
                            </svg>
                            @endif
                        </div>
                        <div class="flex-1 px-2">
                            <p>{{ $inf->titre }} </p>
                            <p>{{ substr($inf->contenu,0,35) }}...</p>
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
    <div class="absolute top-0 left-0 w-full bg-black" id="notif">
        <div class="flex p-2 text-white bg-purple-600">
            <p class="flex-1">{{ session('message') }}</p>
            <button>X</button>
        </div>
    </div>
    <script>
        var a = document.querySelector('#notif');
        a.style.transform = "scale(0)";
        window.addEventListener('crud', event => {
            a.style.transform = "scale(0.2)";
            setTimeout(() => {
                a.style.transform = "scale(0.6)";
                setTimeout(() => {
                    a.style.transform = "scale(1)";
                }, 100);
            }, 100);
            setTimeout(() => {
                a.style.transform = "scale(0)";
            }, 3000);
        });
            
    </script>
</div>
