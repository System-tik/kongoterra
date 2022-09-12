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
            <h1 class="py-2 text-xl font-bold">Mise à jour de données | Services</h1>
            <hr>
            <div class="pt-2">
                <div class="">
                    <label class="">Nom du service</label>
                    <input type="text" class="w-full p-2 mt-2" placeholder="Nom du service" wire:model="nom">
                </div>
                <div class="">
                    <label class="">Description du service</label>
                    <textarea  rows="5" class="w-full p-2 mt-2" placeholder="Description du service" wire:model="descrip"></textarea>
                </div>
                <div class="">
                    <label class="">Sous titre</label>
                    <textarea  rows="5" class="w-full p-2 mt-2" placeholder="Sous titre" wire:model="soustitre"></textarea>
                </div>
            </div>
            <div class="grid grid-cols-2 gap-4 py-2 bg-white">
                <button class="px-3 py-2 text-lg font-bold text-white bg-green-600" @click="modal=true;save=true;update=false;del=false">Enregistrer</button>        
                <button class="px-3 py-2 text-lg font-bold text-white bg-yellow-600" @click="modal=true;save=false;update=true;del=false;">Modifier</button>        
                <button class="px-3 py-2 text-lg font-bold text-white bg-red-900" @click="modal=true;save=false;update=false;del=true;">Supprimer</button>
                <button class="text-lg font-bold text-white bg-gray-500 -3" wire:click="resetInputs" @click="descri='';titre='';id=0">Clear</button> 
                <input type="file" wire:model="photo">   
            </div>
        </div>
        {{-- affichage des informations --}}
        <div class="col-span-2 p-4 rounded bg-gray-50">
            <h1 class="py-2 text-xl font-bold">Données</h1>
            <hr>
            <div class="grid w-full grid-cols-2 gap-4 py-3">
                @forelse ($services as $serv)
                <img src="{{asset('public/service/')}}" alt="">
                    <div class="flex flex-col rounded shadow cursor-pointer" wire:click="fillInputs({{$serv}})">
                        <div class="flex items-center justify-between p-4 text-white bg-slate-500">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M7 20l4-16m2 16l4-16M6 9h14M4 15h14" />
                            </svg>
                    
                            <p>{{ $serv->nom }}</p>
                        </div>
                        <div class="flex-1 p-4">
                            <p>{{ $serv->descrip }}</p>
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
    <div class="absolute top-0 left-0 w-full bg-black" id="notif5">
        <div class="flex p-2 text-white bg-purple-600">
            <p class="flex-1">{{ session('message') }}</p>
            <button>X</button>
        </div>
    </div>
    <script>
        var a = document.querySelector('#notif5');
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
