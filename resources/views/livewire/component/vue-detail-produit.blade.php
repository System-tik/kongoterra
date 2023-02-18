<div class="justify-center lg:grid lg:grid-cols-5 lg:flex-row lg:gap-10 2xl:px-64 lg:px-5 md:px-24 xl:px-24" x-data="{
    conNotif : false,
    qte : false,
    init(){
        console.log(this.conNotif);
        window.addEventListener('notConnected', event => {
            setTimeout(() => {
                this.conNotif = true;
            }, 200);
            setTimeout(() => {
                this.conNotif = false;
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
    <div class="flex justify-center {{--  xl:w-1/2 lg:w-4/5 --}} {{-- lg:pl-10 px-5 md:px-28 sm:px-16 lg:px-0 --}} col-span-2">
        <div class="w-full bg-gray-200">
            <div class="w-1/12 p-2 bg-green-600 "></div>
            <div class="p-4">
                {{-- <h1 class="text-xl text-green-500">Ville : {{$produit->ville}}</h1> --}}
                <div class="flex justify-between">
                    <h1 class="py-2 text-blue-900 sm:text-3xl">{{ $produit->nom }}</h1>
                    <h1 class="py-2 text-blue-900 sm:text-3xl">{{$produit->prix}} FC</h1> 
                </div>
                {{-- <p class="py-3 text-xl text-gray-500">{{$produit->b}} {{$produit->an}}</p> --}}
            
                {{-- Gallerie annonce --}}
                <div class="flex flex-col w-full gap-4">
                    <div class="flex flex-col justify-center items-center">
                        <div style="height:384px;" class="w-full h-96 flex justify-center items-center absolute">
                            <svg wire:loading aria-hidden="true" class="inline w-20 h-20 mr-2 text-gray-200 animate-spin dark:text-gray-600 fill-blue-600" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="currentColor"/>
                                <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentFill"/>
                            </svg>
                        </div>
                        
                        <section id="main-carousel" class="splide" aria-label="My Awesome Gallery">
                            <div class="splide__track">
                              <ul class="splide__list">
                                @foreach (Storage::files('public/produits/'.$produit->id) as $b)                    
                                    <li class="splide__slide">
                                        <img src="{{asset(str_replace('public', 'storage', $b))}}?{{ rand() }}" alt="Pas d'image pour cette info" style="height:384px;" class="w-full h-96">
                                    </li>
                                    @endforeach           
                              </ul>
                            </div>
                        </section>
                    </div> 
                    <section id="thumbnail-carousel" class="splide" aria-label="The carousel with thumbnails. Selecting a thumbnail will change the Beautiful Gallery carousel.">
                        <div class="splide__track">
                            <ul class="splide__list">
                            @foreach (Storage::files('public/produits/'.$produit->id) as $b)                    
                                <li class="splide__slide">
                                    <img src="{{asset(str_replace('public', 'storage', $b))}}?{{ rand() }}" alt="Pas d'image pour cette info">        
                                </li>
                            @endforeach  
                            </ul>
                        </div>
                    </section>
                    {{-- <div class="grid grid-cols-2 gap-4 p-1 bg-gray-100 rounded-sm xl:grid-cols-4 sm:grid-cols-3" >
                        @foreach (Storage::files('public/produits/'.$produit->id) as $b)
                            
                            <div class="cursor-pointer" wire:click="change_img({{$loop->index}})">
                                <img src="{{asset(str_replace('public', 'storage', $b))}}?{{ rand() }}" alt="Pas d'image pour cette info" class="w-full" style="height:70px;">
                                
                            </div>
                            
                            @endforeach
                            
                        </div> --}}
                       
                </div>
            
                {{-- <div class="py-12">
                    <h1 class="py-2 text-blue-900 sm:text-3xl">Descriptif du produit</h1>
                    <div class="py-5 text-justify">
                        <p>
                            {{$produit->description}}
                        </p>
                    </div>
                </div> --}}
            </div>
        </div>
        
    </div>
    {{-- Formulaire contact --}}
    <div class="flex flex-col {{-- xl:w-9/12 lg:w-4/5 --}} {{-- lg:pr-10 px-5 md:px-28 sm:px-16 lg:px-0 --}} col-span-3">
        <div class="flex flex-col lg:p-0">
            <div class="px-10 pt-10 pb-1">
                <h1 class="text-xl font-bold">Description</h1>
                <div class="w-full">
                    <p class="text-justify ">{{$produit->descrip}}</p>
                    
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
                </div>
                
                {{-- <div class="flex flex-col gap-4 py-5">
                    <div class="flex gap-2">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                        <p>+243 82 24 23 686</p>
                    </div>
                    <div class="flex gap-2">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                        <p>immo-immediat@gmail.com</p>
                    </div>
                    <div class="flex gap-5">
                        <a href="#"><svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg></a>
                        <a href="#"><svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg></a>
                        <a href="#"><svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg></a>
                        <a href="#"><svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg></a>
                    </div>
                </div> --}}
            </div>
            <div class="flex-1 px-5 pt-5 text-gray-500 bg-white shadow-2xl md:px-10">
                
                <p class="py-1 ">
                    <b>Bonjour, êtes-vous vivement intéressé par ce produit ?</b>
                    <br>
                    <hr>
                    Merci de nous recontacter pour plus d'informations. 
                </p>
                <div class="py-3">
                    <h1 class="py-2">Liste des magasins disponible</h1>
                    <div class="grid grid-cols-1 gap-4 lg:grid-cols-2">
                        @foreach ($magasins as $mag)    
                        <div class="flex shadow">
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
            
            </div>
        </div>
    </div>
      
    
    

    <script>
        document.addEventListener( 'DOMContentLoaded', function () 
        {
            var main = new Splide( '#main-carousel', {
                type      : 'fade',
                rewind    : true,
                pagination: false,
                arrows    : false,
            } );


            var thumbnails = new Splide('#thumbnail-carousel', {
                fixedWidth  : 100,
                fixedHeight : 60,
                gap         : 10,
                rewind      : true,
                pagination  : false,
                isNavigation: true,
                breakpoints : {
                    600: {
                        fixedWidth : 60,
                        fixedHeight: 44,
                    },
                },
            });
            main.sync( thumbnails );
            main.mount();
            thumbnails.mount();
        });
    </script>
    
</div>