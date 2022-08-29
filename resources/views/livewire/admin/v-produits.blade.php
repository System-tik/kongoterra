<div x-data="{
    modal : false,
    message : 'Êtes-vous sûr de vouloir ',
    save : true,
    update : false,
    del : false,
    notifU : false,
    gallerie : false,
    init(){
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
}" x-init="init()">
    <div class="grid h-full grid-cols-3 gap-3">
        <div class="h-full p-4 rounded bg-gray-50">
            <h1 class="py-2 text-xl font-bold">Mise à jour Informations de Kongoterra</h1>
            <hr>
            <div class="flex flex-col gap-4 pt-2 ">
                <div class="">
                    <label class="">Nom du produit</label>
                    <input type="text" class="w-full p-2 mt-2" placeholder="Nom du produit" wire:model="nom">
                </div>
                <div class="">
                    <label class="">Description du produit</label>
                    <textarea  rows="5" class="w-full p-2 mt-2" placeholder="Description du service" wire:model="descrip"></textarea>
                </div>
                <label class="">Categorie du produit</label>
                <div class="flex " x-data="{select : true}">
                    {{-- Choix et creation categorie --}}
                    <select name="" id="" class="flex-1 py-2 border" wire:model="catp_id">
                        <option value="">Choix categorie</option>
                        @foreach ($categories as $cat)
                            <option value="{{$cat->id}}" wire:click="$emit('send',{{$cat}})">{{$cat->lib}}</option>
                        @endforeach
                    </select>
                    <div x-show="!select">
                        <livewire:component.c-categorie />
                    </div>
                    <button class="p-2 text-white" @click="select=!select" :class="select ? 'bg-green-600':'bg-gray-600'">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" x-show="select">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                      </svg>
                      <b x-show="!select">X</b>
                    </button>
                </div>
                <div class="">
                    <label class="">Prix du produit</label>
                    <input type="text" class="w-full p-2 mt-2" placeholder="Prix du produit" wire:model="prix">
                </div>
                <div class="flex flex-col items-start justify-start " x-data="{ isUploading : false, progress : 0 }"
                    x-on:livewire-upload-start="isUploading = true"
                    x-on:livewire-upload-finish="isUploading = false" 
                    x-on:livewire-upload-error="isUploading = false"
                    x-on:livewire-upload-progress="progress = $event.detail.progress">
                    <div class="flex w-full gap-5 py-2">
                        {{-- Button ajouter gallerie des dans images --}}
                        <label class="flex flex-col items-center justify-center w-full px-4 py-1 tracking-wide text-purple-600 uppercase transition-all duration-150 ease-linear bg-white border rounded-md shadow-md cursor-pointer border-blue hover:bg-purple-600 hover:text-white">
                            <span class="px-3 mt-2 text-base leading-normal">Ajouter des images</span>
                            <input type="file" class="hidden" wire:model="galleries" multiple />
                            <div x-show="isUploading" class="h-full">
                                <progress max="100" x-bind:value="progress">
                                    <b x-text="progress"></b>%
                                </progress>
                            </div>
                        </label>
                    </div>
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
            <h1 class="py-2 text-xl font-bold">Liste des produits</h1>
            <hr>
            <div class="grid w-full grid-cols-4 gap-4 py-3">
                @forelse ($produits as $b)    
                    <div class="flex flex-col p-1 shadow-xl cursor-pointer" wire:click="fillInputs({{$b}})">
                        @if (count(Storage::files('public/produits/'.$b->id)) > 0)    
                        @if (Storage::exists(Storage::files('public/produits/'.$b->id)[0]))    
                            <img 
                                src="{{asset(str_replace('public', 'storage', Storage::files('public/produits/'.$b->id)[0]))}}?{{ rand()}}" 
                                alt="Pas d'image pour cette info"  
                                class="w-full"
                                style="height: 160px;">
                        @endif
                        @endif 
                        
                        
                        <p class="text-center">
                            <b>{{$b->nom}}</b> / <b>{{$b->prix}}</b> 
                        </p>
                        <div class="px-1 py-2 bg-gray-100">
                            <p>{{$b->description}}</p>
                            <button class="w-full px-2 py-1 bg-gray-200" @click="gallerie=true">Voir gallerie</button>
                        </div>
                    </div>
                    <div>
                        <p>{{asset(str_replace('public', 'storage', $b->id.'.png'))}}</p>
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
    {{-- gallerie --}}
    <div class="absolute top-0 left-0 flex flex-col w-full h-full black-transparent" x-show="gallerie" x-transition.500ms>
        <div class="flex items-center justify-between text-white bg-black">
            <p class="px-5"><b>Gallerie d'images du bien</b></p>
            <button class="p-2 text-white bg-red-600" @click="gallerie=false">X</button>
        </div>
        <div class="flex items-start justify-start px-2 py-2">
            <div class="grid flex-1 grid-cols-3 gap-2">
                @foreach (Storage::files('public/produits/'.$selectedID) as $gal)
                {{-- <p>{{str_replace('public', 'storage', $gal)}}</p> --}}
                <div class="flex flex-col w-full p-1 shadow-xl cursor-pointer bg-gray-50" wire:click="edit('{{str_replace('public', 'storage', $gal)}}')">
                    <img src="{{asset(str_replace('public', 'storage', $gal))}}?{{ rand() }}" alt="Pas d'image pour cette info" srcset="" class="w-full " style="height: 300px;">
                    <button class="px-2 py-1 text-white bg-gray-800" >
                        Edit
                    </button>
                </div>
                @endforeach
            </div>
            {{-- update gallerie --}}
            <div class="flex flex-col items-start justify-start px-5 pb-5 bg-gray-900" x-data="{ isUploading : false, progress : 0 }" style="width: 400px;"
            x-on:livewire-upload-start="isUploading = true"
            x-on:livewire-upload-finish="isUploading = false" 
            x-on:livewire-upload-error="isUploading = false"
            x-on:livewire-upload-progress="progress = $event.detail.progress">
            <div class="flex gap-5 py-2">
                {{-- Button ajouter gallerie des dans images --}}
                <label class="flex flex-col items-center justify-center px-4 py-1 tracking-wide text-purple-600 uppercase transition-all duration-150 ease-linear bg-white border rounded-md shadow-md cursor-pointer border-blue hover:bg-purple-600 hover:text-white">
                    <span class="px-3 mt-2 text-base leading-normal">Ajouter des images</span>
                    <input type="file" class="hidden" wire:model="galleries" multiple />
                    <div x-show="isUploading" class="h-full">
                        <progress max="100" x-bind:value="progress">
                            <b x-text="progress"></b>%
                        </progress>
                    </div>
                </label>
                <button class="flex-1 px-1 py-2 text-white bg-blue-900 gray-500" wire:click="addImg">
                    Valider
                </button>
            </div>
                <img src="{{asset($selectedGal)}}?{{ rand() }}" alt="Pas d'image pour cette info" srcset="" class="w-full" style="height: 300px;">
                <div class="grid w-full grid-cols-2 gap-2 px-1 py-2 bg-gray-50">
                    <button class="w-full px-2 py-1 text-white bg-red-700" wire:click="deleteImg">Supprimer image</button>
                    <label class="flex flex-col items-center justify-center px-2 py-1 tracking-wide text-purple-600 uppercase transition-all duration-150 ease-linear bg-white cursor-pointer border-blue hover:bg-purple-600 hover:text-white">
                        <span class="px-2 text-base leading-normal">Changer image</span>
                        <input type='file' class="hidden" wire:model="photo" />
                        <div x-show="isUploading" class="h-full">
                            <progress max="100" x-bind:value="progress">
                                <b x-text="progress"></b>%
                            </progress>
                        </div>
                    </label>
                </div>
                @if ($photo)
                <div class="px-1 py-3 bg-gray-100">
                    <p class="py-2 text-center">Previsualisation</p>
                    <img src="{{ $photo->temporaryUrl() }}" alt="Pas d'image ici " srcset="" class="w-full" style="height: 300px;">                    
                    <div class="flex py-2">
                        <button class="flex-1 px-1 py-2 gray-500">
                            Annuler
                        </button>
                        <button class="flex-1 px-1 py-2 text-white bg-blue-900 gray-500" wire:click="updateImg">
                            Valider
                        </button>
                    </div>
                </div>
                @endif
            </div>
        </div>

    </div>
</div>
