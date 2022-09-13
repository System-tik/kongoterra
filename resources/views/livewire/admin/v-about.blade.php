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
    <div class="grid h-full grid-cols-3 gap-3">
        <div class="h-full p-4 rounded bg-gray-50">
            <h1 class="py-2 text-xl font-bold">Mise à jour Informations de Kongoterra</h1>
            <hr>
            @if ($errors->any())
                <div class="p-2 bg-red-300 ">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
            <div class="flex flex-col gap-4 pt-2">
                <div class="">
                    <label class="">Titre</label>
                    <input type="text" class="w-full p-2 mt-2" placeholder="Titre de l'info" wire:model="titre">
                </div>
                <div class="">
                    <label class="">Description</label>
                    <textarea  rows="3" class="w-full p-2 mt-2" placeholder="Titre de l'info" wire:model="descrip"></textarea>
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
                        </div>
                    </div>
                    <textarea  rows="3" class="w-full p-2 mt-2" placeholder="Titre de l'info" wire:model="ab"></textarea>
                </div>
                <div class="grid grid-cols-2 gap-2">
                    @forelse ($sous as $abt)
                    <div class="flex p-2 cursor-pointer bg-slate-300" wire:click="edit({{$loop->index}})">
                        <p class="flex-1">{{$abt}}</p>
                    </div>
                    @empty
                        Aucun sous point
                    @endforelse
                </div>
            </div>
            <div class="grid grid-cols-2 gap-4 py-2 bg-white">
                <button class="px-3 py-2 text-lg font-bold text-white bg-green-600" @click="modal=true;save=true;update=false;del=false">Enregistrer</button>        
                <button class="px-3 py-2 text-lg font-bold text-white bg-yellow-600" @click="modal=true;save=false;update=true;del=false;">Modifier</button>        
                <button class="px-3 py-2 text-lg font-bold text-white bg-red-900" @click="modal=true;save=false;update=false;del=true;">Supprimer</button>
                <button class="text-lg font-bold text-white bg-gray-500 -3" wire:click="resetInputs" @click="descri='';titre='';id=0">Clear</button> 
                <button class="col-span-2 py-2 text-lg font-bold text-white bg-gray-500" wire:click="resetInputs" @click="descri='';titre='';id=0">Clear sous-point</button>
            </div>
        </div>
        {{-- affichage des informations --}}
        <div class="col-span-2 p-4 overflow-y-auto rounded bg-gray-50" style="height: 80vh;"
         x-data="{
            accords : [],
            init(nbr){
                this.accords = Array.from({length : nbr}, ()=> false)   
            },
            afficher(v){
                this.accords[v] = !this.accords[v]
                for(var i = 0; i < this.accords.length; i++){
                    if(i !== v){
                        this.accords[i] = false
                    }
                }
            }
         }" x-init="init({{count($abouts)}})">
            <h1 class="py-2 text-xl font-bold">Informations de Kongoterra</h1>
            <hr>
            <div class="grid w-full grid-cols-2 gap-4 py-3">
                @forelse ($abouts as $inf)
                
                    <div class="flex rounded shadow cursor-pointer" wire:click="fillInputs({{$inf}})">
                        {{-- <div class="flex items-center justify-center p-4 text-white bg-slate-500">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M3 12v3c0 1.657 3.134 3 7 3s7-1.343 7-3v-3c0 1.657-3.134 3-7 3s-7-1.343-7-3z" />
                                <path d="M3 7v3c0 1.657 3.134 3 7 3s7-1.343 7-3V7c0 1.657-3.134 3-7 3S3 8.657 3 7z" />
                              <path d="M17 5c0 1.657-3.134 3-7 3S3 6.657 3 5s3.134-3 7-3 7 1.343 7 3z" />
                            </svg>
                        </div> --}}
                        <div class="flex-1 px-2">
                            <p class="py-1 pl-2 text-white border-b bg-slate-500" @click="afficher({{$loop->index}})"><b>{{ $inf->titre }}</b></p>

                            <div x-show="accords[{{$loop->index}}]" class="animate__animated animate__fadeInDown">
                                <p class="text-justify">{{ $inf->descrip }}</p>
                                @if ($inf->sous)
                                <div class="flex flex-col">
                                    <h1 class="font-bold">Sous points :</h1>
                                    <hr>
                                    @foreach ($inf->sous as $s)
                                        <p class=""># {{ $s }}</p>
                                    @endforeach
                                </div>
                               
                                @endif
                            </div>

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
    <div class="absolute top-0 left-0 w-full bg-black" id="notif4" x-show="notifU">
        <div class="flex p-2 text-white bg-purple-600">
            <p class="flex-1">{{ session('message') }}</p>
            <button>X</button>
        </div>
    </div>
    
</div>



<div>
    
</div>
