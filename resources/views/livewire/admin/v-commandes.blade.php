<div x-data="{
    modal : false,
    message : 'Êtes-vous sûr de vouloir ',
    save : true,
    update : false,
    del : false,
    notifU : false,
    gallerie : false,
    c_livre : false,
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
<div class="grid grid-cols-4 gap-3 mb-2">
    <div class="grid grid-cols-2 col-span-3 col-start-2 rounded shadow bg-gray-50">
        <button @click="c_livre=!c_livre" class="p-2 transition duration-200 bg-gray-100 rounded-l hover:bg-gray-300" :class="{'bg-gray-300':!c_livre}">Commandes non livrées</button>
        <button @click="c_livre=!c_livre" class="p-2 transition duration-200 bg-gray-100 rounded-r hover:bg-gray-300" :class="{'bg-gray-300':c_livre}">Commandes livrées</button>
    </div>
</div>
{{-- Commandes non livrees --}}
<div class="grid grid-cols-4 gap-3" x-show="!c_livre" style="height: 80vh;">
    
    <div class="p-4 overflow-y-auto rounded bg-gray-50">
        <h1 class="py-2 text-xl font-bold">Liste des commandes non livrées / Clients</h1>
        <hr>
        <div class="flex flex-col w-full py-2">
            @forelse ($commandes as $com)
                    <div class="flex items-center rounded shadow cursor-pointer" wire:click="choixC({{$com}})">
                        <div class="flex items-center justify-center p-4 text-white bg-slate-500">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M7 20l4-16m2 16l4-16M6 9h14M4 15h14" />
                            </svg>
                        </div>
                        <div class="flex flex-1 px-2">
                            <div class="flex flex-1">
                                <p><b>{{ $com->noms }}</b></p>
                                <p>/{{ $com->nmag }}</p>
                            </div>
                            <p class="px-2 bg-slate-300">{{ count($com->produits) }}</p>
                            {{-- <p>Ville de {{ $com->nmag }} / Province de {{ $com->adresse }}</p> --}}
                        </div>
                    </div>
                @empty
                    <div class="flex items-center justify-center">
                        <p>Pas des données disponible pour l'instant !</p>
                    </div>
                @endforelse
        </div>
    </div>
    <div class="flex flex-col h-full col-span-3 gap-3 overflow-y-auto">
        <div class="h-full p-4 rounded bg-gray-50">
            
            <div class="flex gap-4">
                <div class="flex-1">
                    <h1 class="py-2 text-xl font-bold">Traitement de la commande</h1>
                    <hr>
                    <div class="grid grid-cols-2 gap-4 py-2 bg-white">
                        <button class="px-3 py-2 text-lg font-bold text-white bg-green-600" @click="modal=true;save=true;update=false;del=false">Annuler</button>        
                        <button class="px-3 py-2 text-lg font-bold text-white bg-yellow-600" @click="modal=true;save=false;update=true;del=false;">Informer magasin</button>        
                        <button class="px-3 py-2 text-lg font-bold text-white bg-red-900" @click="modal=true;save=false;update=false;del=true;">Produits livrés</button>
                        <button class="text-lg font-bold text-white bg-gray-500 -3" wire:click="resetInputs" @click="descri='';titre='';id=0">Clear</button>        
                    </div>
                </div>
                <div class="flex-1">
                    <div class="flex items-center justify-between">
                        <h1 class="py-2 text-xl font-bold">Données de la commande</h1>
                        <p><b>Etat de la commande : </b>({{($cmd) ? $cmd['etat']: ''}})</p>
                    </div>
                    <hr>
                    <div class="grid grid-cols-3 gap-4 p-1 mt-2">
                        <div class="p-1 shadow">
                            <h1 class="pb-2 text-xl border-b">Client</h1>
                            <p><b>Nom : </b>{{($cmd) ? $cmd['noms']: ''}}</p>
                            
                            <p><b>Tel : </b><a href="https://wa.me/{{($cmd) ? $cmd['tel']: ''}}?text=Bonjour%20,%20www.Kongoterra.com%20a%20reçu%20votre%20commande%20de%20{{count($produits_cmd)}}%20produits%20,%20pour%20un%20total%20de%20{{$total}}%20FC">{{($cmd) ? $cmd['tel']: ''}}</a></p>
                            <p><b>Email : </b><a href="mailto:{{($cmd) ? $cmd['email']: ''}}">{{($cmd) ? $cmd['email']: ''}}</a></p>
                        </div>
                        <div class="col-span-2 p-1 shadow">
                            <h1 class="pb-2 text-xl border-b">Magasin</h1>
                            <p><b>Nom : </b>{{($cmd) ? $cmd['nmag']: ''}}</p>
                            <p><b>Adresse : </b>{{($cmd) ? $cmd['adresse']: ''}}</p>
                            <p><b>Ville / Province : </b>{{($cmd) ? $cmd['ville'].' / '.$cmd['province']: ''}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- affichage des informations --}}
        <div class="col-span-2 p-4 rounded bg-gray-50">
            <div class="flex justify-between">
                <h1 class="py-2 text-xl font-bold">Liste des produits Commandes</h1>
                <h1 class="py-2 text-xl font-bold">Total : {{$total}} FC</h1>
            </div>
            <hr>
            <div class="grid w-full grid-cols-4 gap-4 py-3">
               @if ($produits_cmd)
               @foreach ($produits_cmd as $pc)   
               @foreach ($produits as $b)
               @if ($b->id == $pc['idp'])
                   
               <div class="flex flex-col p-1 shadow-xl cursor-pointer" {{-- wire:click="fillInputs({{$b}})" --}}>
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
                       <b>{{$b->nom}}</b> / <b> Pu :{{$b->prix}}</b> 
                   </p>
                   <p class="text-center">
                        <b> Qté :{{$pc['qte']}}</b> /
                        <b> PT :{{$pc['qte'] * $b->prix}}</b> 
                    </p>
               </div>
               @endif    
               
               @endforeach
                   
               @endforeach
               @else
               <p>Pas des données disponible pour l'instant !</p>
               @endif
                {{-- @forelse ($produits_cmd as $b)    
                    <div class="flex flex-col p-1 shadow-xl cursor-pointer" wire:click="fillInputs({{$b}})">
                        @if (count(Storage::files('public/produits/'.$b->id)) > 0)    
                        @if (Storage::exists(Storage::files('public/produits/'.$b->id)[0]))    
                            <icom 
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
                @empty
                    <div class="flex items-center justify-center">
                        <p>Pas des données disponible pour l'instant !</p>
                    </div>
                @endforelse --}}
            </div>
        </div>
    </div>
</div>
{{-- Commandes livrees --}}
<div class="grid grid-cols-4 gap-3" x-show="c_livre">
    
    <div class="p-4 rounded bg-gray-50">
        <h1 class="py-2 text-xl font-bold">Liste des commandes livrées / Clients</h1>
        <hr>
        <div class="flex flex-col w-full py-2">
            @forelse ($commandesl as $com)
                    <div class="flex items-center rounded shadow cursor-pointer" wire:click="choixC({{$com}})">
                        <div class="flex items-center justify-center p-4 text-white bg-slate-500">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M7 20l4-16m2 16l4-16M6 9h14M4 15h14" />
                            </svg>
                        </div>
                        <div class="flex flex-1 px-2">
                            <div class="flex flex-1">
                                <p><b>{{ $com->noms }}</b></p>
                                <p>/{{ $com->nmag }}</p>
                            </div>
                            <p class="px-2 bg-slate-300">{{ count($com->produits) }}</p>
                            {{-- <p>Ville de {{ $com->nmag }} / Province de {{ $com->adresse }}</p> --}}
                        </div>
                    </div>
                @empty
                    <div class="flex items-center justify-center">
                        <p>Pas des données disponible pour l'instant !</p>
                    </div>
                @endforelse
        </div>
    </div>
    <div class="flex flex-col h-full col-span-3 gap-3">
        <div class="h-full p-4 rounded bg-gray-50">
            
            <div class="flex gap-4">
                
                <div class="flex-1">
                    <div class="flex items-center justify-between">
                        <h1 class="py-2 text-xl font-bold">Données de la commande</h1>
                        <p><b>Etat de la commande : </b>({{($cmd) ? $cmd['etat']: ''}})</p>
                    </div>
                    <hr>
                    <div class="grid grid-cols-3 gap-4 p-1 mt-2">
                        <div class="p-1 shadow">
                            <h1 class="pb-2 text-xl border-b">Client</h1>
                            <p><b>Nom : </b>{{($cmd) ? $cmd['noms']: ''}}</p>
                            <p><b>Tel : </b><a href="tel:{{($cmd) ? $cmd['tel']: ''}}">{{($cmd) ? $cmd['tel']: ''}}</a></p>
                            <p><b>Email : </b><a href="mailto:{{($cmd) ? $cmd['email']: ''}}">{{($cmd) ? $cmd['email']: ''}}</a></p>
                        </div>
                        <div class="col-span-2 p-1 shadow">
                            <h1 class="pb-2 text-xl border-b">Magasin</h1>
                            <p><b>Nom : </b>{{($cmd) ? $cmd['nmag']: ''}}</p>
                            <p><b>Adresse : </b>{{($cmd) ? $cmd['adresse']: ''}}</p>
                            <p><b>Ville / Province : </b>{{($cmd) ? $cmd['ville'].' / '.$cmd['province']: ''}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- affichage des informations --}}
        <div class="col-span-2 p-4 rounded bg-gray-50">
            <div class="flex justify-between">
                <h1 class="py-2 text-xl font-bold">Liste des produits Commandes</h1>
                <h1 class="py-2 text-xl font-bold">Total : {{$total}} FC</h1>
            </div>
            <hr>
            <div class="grid w-full grid-cols-4 gap-4 py-3">
               @if ($produits_cmd)
               @foreach ($produits_cmd as $pc)   
               @foreach ($produits as $b)
               @if ($b->id == $pc['idp'])
                   
               <div class="flex flex-col p-1 shadow-xl cursor-pointer" {{-- wire:click="fillInputs({{$b}})" --}}>
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
                       <b>{{$b->nom}}</b> / <b> Pu :{{$b->prix}}</b> 
                   </p>
                   <p class="text-center">
                        <b> Qté :{{$pc['qte']}}</b> /
                        <b> PT :{{$pc['qte'] * $b->prix}}</b> 
                    </p>
               </div>
               @endif    
               
               @endforeach
                   
               @endforeach
               @else
               <p>Pas des données disponible pour l'instant !</p>
               @endif
                {{-- @forelse ($produits_cmd as $b)    
                    <div class="flex flex-col p-1 shadow-xl cursor-pointer" wire:click="fillInputs({{$b}})">
                        @if (count(Storage::files('public/produits/'.$b->id)) > 0)    
                        @if (Storage::exists(Storage::files('public/produits/'.$b->id)[0]))    
                            <icom 
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
                @empty
                    <div class="flex items-center justify-center">
                        <p>Pas des données disponible pour l'instant !</p>
                    </div>
                @endforelse --}}
            </div>
        </div>
    </div>
</div>

    {{-- Modals --}}
    <div x-show="modal" @click="modal=false;" x-transition.500ms>
        <x-admin.crudmodal >
            <p class="px-20 text-xl">
                <span x-text="message"></span>
                <span x-show="save">Annuler</span>
                <span x-show="update">Informer le magasin</span>
                <span x-show="del">Signaler que les produits sont livrés</span>
            </p>
            <hr>
            <div class="flex w-full p-2">
                <button class="flex-1 px-3 py-2 text-lg font-bold text-white bg-blue-900 hover:bg-blue-700"   x-show="save" wire:click="update('annulé')">Annuler commande</button>        
                <button class="flex-1 px-3 py-2 text-lg font-bold text-white bg-yellow-600 hover:bg-yellow-400"   x-show="update" wire:click="update('magasin')">Informer le magasin</button>        
                <button class="flex-1 px-3 py-2 text-lg font-bold text-white bg-red-900 hover:bg-red-700"  x-show="del" wire:click="update('ok')">Produits livrés</button>
                <button class="flex-1 px-3 py-2 text-lg font-bold text-white bg-gray-500 hover:bg-gray-700" >Quitter</button>
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
    
</div>
