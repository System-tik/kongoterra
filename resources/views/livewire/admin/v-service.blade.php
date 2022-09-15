<div x-data="{
    modal : false,
    message : 'Êtes-vous sûr de vouloir ',
    save : true,
    update : false,
    del : false,
    notifU : false,init(){
        console.log(this.notifU);
        window.addEventListener('crud', event => {
            setTimeout(() => {
                this.notifU = true;
            }, 200);
            setTimeout(() => {
                this.notifU = false;
            }, 3000);
        });
    }
}" x-init="init()" >
    <div class="grid h-full grid-cols-3 gap-3">
        <div class="h-full p-4 rounded ">
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
                <div class="flex flex-col justify-center h-full bg-green-700">
                    <div class="flex items-center justify-between">
                        <label class="px-1 text-white">Sous points</label>
                        <div class="flex">
                            <button class="p-2 text-white " wire:click="add">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </button>
                            <button class="p-2 text-white border-l" wire:click="upsous">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15" />
                                </svg>
                            </button>
                            <button class="p-2 text-white border-l" wire:click="delsous">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" class="text-red-500" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                </svg>
                            </button>
                            <button class="p-2 text-white border-l" wire:click="delallsous">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M20.25 7.5l-.625 10.632a2.25 2.25 0 01-2.247 2.118H6.622a2.25 2.25 0 01-2.247-2.118L3.75 7.5m6 4.125l2.25 2.25m0 0l2.25 2.25M12 13.875l2.25-2.25M12 13.875l-2.25 2.25M3.375 7.5h17.25c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125z" />
                                </svg>                                  
                            </button>
                        </div>
                    </div>
                    <textarea  rows="3" class="w-full p-2 mt-2" placeholder="Sous points" wire:model="ab"></textarea>
                </div>
                

{{-- test joël --}}
                <div class="grid grid-cols-2 gap-2">
                    @forelse ($sous as $abt)
                    <div class="flex p-2 cursor-pointer bg-slate-300" wire:click="edit({{$loop->index}})">
                        <p class="flex-1">{{$abt}}</p>
                    </div>
                    @empty
                        Aucun sous point
                    @endforelse
                </div>

{{-- test joël --}}


            </div>
            <div class="grid grid-cols-2 gap-4 py-2 bg-white">
                <button class="px-3 py-2 text-lg font-bold text-white bg-green-600" @click="modal=true;save=true;update=false;del=false">Enregistrer</button>        
                <button class="px-3 py-2 text-lg font-bold text-white bg-yellow-600" @click="modal=true;save=false;update=true;del=false;">Modifier</button>        
                <button class="px-3 py-2 text-lg font-bold text-white bg-red-900" @click="modal=true;save=false;update=false;del=true;">Supprimer</button>
                <button class="text-lg font-bold text-white bg-gray-500 -3" wire:click="resetInputs" @click="descri='';titre='';id=0">Clear</button> 
                {{-- <input type="file" wire:model="photo"> --}}   
                <div class="flex flex-col items-start justify-start " x-data="{ isUploading : false, progress : 0 }"
                    x-on:livewire-upload-start="isUploading = true"
                    x-on:livewire-upload-finish="isUploading = false" 
                    x-on:livewire-upload-error="isUploading = false"
                    x-on:livewire-upload-progress="progress = $event.detail.progress">
                    <div class="flex w-full gap-5 py-2">
                        {{-- Button ajouter gallerie des dans images --}}
                        <label class="flex flex-col items-center justify-center w-full px-4 py-1 tracking-wide text-purple-600 uppercase transition-all duration-150 ease-linear bg-white border rounded-md shadow-md cursor-pointer border-blue hover:bg-purple-600 hover:text-white">
                            <span class="px-3 mt-2 text-base leading-normal">Ajouter une image</span>
                            <input type="file" class="hidden" wire:model="photo" />
                            <div x-show="isUploading" class="h-full">
                                <progress max="100" x-bind:value="progress">
                                    <b x-text="progress"></b>%
                                </progress>
                            </div>
                        </label>
                    </div>
                </div>
            </div>
        </div>
        {{-- affichage des informations --}}
        <div class="col-span-2 p-4 rounded bg-gray-50">
            <h1 class="py-2 text-xl font-bold">Données</h1>
            <hr>
            <div class="grid w-full grid-cols-2 gap-4 py-3">
                @forelse ($services as $serv)
                    <div class="flex flex-col rounded shadow cursor-pointer" wire:click="fillInputs({{$serv}})">
                        <div class="flex items-center justify-between pr-4 text-white bg-slate-500">
                            <div>
                                @if (Storage::exists('public/service/'.$serv->id.'.png'))                                
                                <img 
                                    src="{{asset(str_replace('public', 'storage', Storage::files('public/service/')[$loop->index]))}}?{{ rand()}}" 
                                    alt="Pas d'image pour cette info"  
                                    class=""
                                    style="height: 50px;">
                                @endif
                            </div>
                    
                            <p>{{ $serv->nom }}</p>
                        </div>
                        <div class="flex-1 p-4">
                            <p>{{ $serv->descrip }}</p>
                        </div>
                        @if ($serv->sous)
                            <div class="flex flex-col">
                                <h1 class="font-bold">Sous points :</h1>
                                <hr>
                                @foreach ($serv->sous as $s)
                                    <p class=""># {{ $s }}</p>
                                @endforeach
                            </div>
                            @endif
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
    {{-- nofication --}}
    <div class="absolute top-0 left-0 w-full bg-black" id="notif6" x-show="notifU" x-transition.500ms>
        <div class="flex p-2 text-white bg-purple-600">
            <p class="flex-1">{{ session('message') }}</p>
            <button>X</button>
        </div>
    </div>
    <script>
        /* var a = document.querySelector('#notif5');
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
        }); */
            
    </script>
</div>
