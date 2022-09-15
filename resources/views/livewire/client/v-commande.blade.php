<div>
    {{-- The Master doesn't talk, he acts. --}}
    <livewire:client.v-nav>
        <div class="flex flex-col justify-center ">
            <header class="flex flex-col items-center justify-end object-cover w-full py-1 font-bold text-white bg-green-600 header-back" {{-- style="background-image: url({{asset('img/USA_Coast_Sunrises_and_sunsets_Marinas_San_589198_1280x853.jpg')}});" --}}>
                <h1>Commander les produits</h1>
            </header>
            <div class="w-full py-1 bg-gray-100"></div>
            <div class="justify-center py-16 lg:grid lg:grid-cols-2 lg:flex-row lg:gap-10 lg:px-32 md:px-24 xl:px-72" x-data="{
                magNotif : false,
                qte : false,
                init(){
                    console.log(this.magNotif);
                    window.addEventListener('magasin', event => {
                        setTimeout(() => {
                            this.magNotif = true;
                        }, 200);
                        setTimeout(() => {
                            this.magNotif = false;
                        }, 5000);
                    });
                    window.addEventListener('qte', event => {
                        setTimeout(() => {
                            this.qte = true;
                        }, 200);
                        setTimeout(() => {
                            this.qte = false;
                        }, 5000);
                    });
                }
            }" x-init="init()">
                <div class="flex justify-center">
                    <div class="w-full bg-gray-200">
                        <div class="w-1/12 p-2 bg-green-600 "></div>
                        <div class="p-4">
                            <div>
                                <p class="pb-5 text-xl font-bold">Liste des produits à commander</p>
                            </div>
                            <div x-data>
                                {{-- If you look to others for fulfillment, you will never truly be fulfilled. --}}
                                <div class="flex flex-col">
                                    @if ($paniers != null)
                                    @foreach ($paniers->produits as $panier)
                                    @foreach ($produits as $p)
                                      @if ($panier['idp'] == $p->id)    
                                      <div class="flex items-center py-2 border-b border-gray-500">
                                          <div class="px-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                                            </svg>
                                          </div>
                                          <p class="flex-1 px-2 border-l border-r">{{$p->nom}}</p>
                                          <p class="px-2 border-r">{{$panier['qte']}} x {{$p->prix}} FC</p>
                                          <p class="px-2">{{$panier['qte'] * $p->prix}} FC</p>
                                          <div class="flex gap-1 ">
                                            <button class="w-6 px-1 text-center text-white bg-green-600" wire:click="modifQte({{$loop->parent->index}}, {{$panier['qte']-1}})">-</button>
                                            <button class="w-6 px-1 text-center text-white bg-green-600" wire:click="modifQte({{$loop->parent->index}}, {{$panier['qte']+1}})">+</button>
                                          </div>
                                      </div>
                                      @endif  
                                    @endforeach
                                    @endforeach
                                    <div class="flex items-center justify-between py-5">
                                        <p>Total :  </p>
                                        <b>{{$total}} FC</b>
                                    </div>
                                    @else
                                        <p>Aucun produit dans le panier</p>
                                    @endif
                                </div>
                                
                            </div>
                            
                        </div>
                    </div>
                </div>
                {{-- Formulaire contact --}}
                <div class="flex flex-col {{-- xl:w-9/12 lg:w-4/5 --}} {{-- lg:pr-10 px-5 md:px-28 sm:px-16 lg:px-0 --}} ">
                    <div class="flex flex-col lg:p-0">
                        <div class="">
                            
                            {{-- <h1 class="text-xl font-bold">Description</h1>
                            <div class="w-full">
                                <p>{{$produit->descrip}}</p>
                                
                            </div>
                            <h1 class="py-2 text-xl font-bold">Ajouter dans le panier</h1>
                            <div class="flex items-center justify-between px-2 bg-gray-200">
                                <div class="flex gap-2 py-2 xl:gap-10 md:flex-row xl:flex-row lg:flex-col">
                                    <button class="w-6 px-1 text-center text-white bg-green-600" wire:click="diminuer">-</button>
                                    <b>{{$qte}}</b>
                                    <button class="w-6 px-1 text-center text-white bg-green-600" wire:click="ajouter">+</button>
                                </div>
                                <div class="flex gap-5">
                                    <p>PT ({{$qte * $produit->prix}} FC) </p>
                                    <button type="button" class="px-4 text-white bg-green-600" wire:click="panier">ajouter</button>
                                </div>
                            </div>
                            <div class="flex items-center justify-end p-3 text-black animate__heartBeat animate__animated " x-show="conNotif">
                                <div class="p-1 " style="background-color:rgba(0, 200, 0, .4)">
                                    
                                    <p class="text-sm ">Vous devez vous connecter avant d'ajouter ces éléments dans le panier</p>
                                </div>
                            </div>
                            <div class="flex items-center justify-end p-3 text-black animate__fadeIn animate__animated " x-show="qte">
                                <div class="p-1 " style="background-color:rgba(200, 0, 0, 0.4)">
                                    
                                    <p class="text-sm ">La qté ne doit pas être nulle (0)</p>
                                </div>
                            </div> --}}
                            
                            
                        </div>
                        <div class="flex-1 text-gray-500 bg-white shadow-2xl md:px-10">
                            
                            {{-- <p class="py-1 ">
                                <b>Bonjour, êtes-vous vivement intéressé par ce produit ?</b>
                                <br>
                                <hr>
                                Merci de nous recontacter pour plus d'informations. 
                            </p> --}}
                            <div class="py-3">
                                <h1 class="py-2">Selectionnez le magasin le plus proche de chez vous</h1>
                                <div class="grid grid-cols-2 gap-4">
                                    @foreach ($magasins as $mag)    
                                    <div class="flex transition duration-500 shadow cursor-pointer hover:bg-gray-100" wire:click="s_mag({{$mag->id}})" :class="{'bg-gray-100':($wire.mag_id == {{$mag->id}})}">
                                        <div class="flex items-center justify-center p-3 border">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                                            </svg>
                                        </div>
                                        <div class="flex flex-col flex-1 px-2 text-justify border">
                                            <p><b>{{ $mag->nom }}</b></p>
                                            <p>Adresse : {{ $mag->adresse }}</p>
                                            <p>Ville de {{ $mag->ville }} / Province de {{ $mag->province }}</p>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                                <div class="py-2">
                                    {{ $magasins->links() }}
                                </div>
                            </div>
                            {{-- <div class="flex flex-col gap-2 md:mb-10 xl:mb-10 xl:gap-10 md:flex-row xl:flex-row lg:flex-col lg:mb-0">
                                <div class="flex-1">
                                    <label for="" class=""><b>Nom</b></label>
                                    <input type="text" name="" id="" class="w-full p-2 border rounded-lg">
                                </div>
                                <div class="flex-1">
                                    <label for="" class=""><b>Prenom</b></label>
                                    <input type="text" name="" id="" class="w-full p-2 border rounded-lg">
                                </div>
                            </div> --}}
                           {{--  <div class="flex flex-col gap-2 py-2 md:mb-10 xl:mb-10 xl:gap-10 md:flex-row xl:flex-row lg:flex-col lg:mb-0">
                                <div class="flex-1">
                                    <div class="pb-5">
                                        <label for="" class=""><b>Email</b></label>
                                        <input type="text" name="" id="" class="w-full p-2 border rounded-lg">
                                    </div>
                                    <div>
                                         <label for="" class=""><b>Phone</b></label>
                                         <input type="text" name="" id="" class="w-full p-2 border rounded-lg">
                                    </div>
                                </div>
                                <div class="flex-1">
                                    <div class="flex-1">
                                        <label for="" class=""><b>Message</b></label>
                                        <textarea name="" id="" class="w-full h-40 p-2 border rounded-lg sm:h-80 xl:h-32 lg:h-20"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="flex justify-end py-2">
                                <button class="px-10 py-2 text-white bg-blue-900">Envoyer</button>
                            </div> --}}
                            <div class="flex items-center justify-end p-3 text-black animate__heartBeat animate__animated " x-show="magNotif">
                                <div class="p-1 " style="background-color:rgba(0, 200, 0, .4)">
                                    
                                    <p class="text-sm ">Vous devez choisir le magasin avant de commander les produits</p>
                                </div>
                            </div>
                            @if ($paniers != null)    
                            <div class="flex justify-end py-5">
                                <button class="px-10 py-2 text-white bg-green-600" wire:click="cmder">
                                    Commander maintenant
                                </button>
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
                
            </div>  
        </div>        
</div>
