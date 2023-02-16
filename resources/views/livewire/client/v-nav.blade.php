<div class="w-screen" x-data="{
    connexion : true,
    mod_ins : false,
    mod_panier : false,
    add_panier : false,
    open : false,
    client : true,
    connecter(){
        if(!this.mod_ins){
            this.mod_ins=true;
            this.connexion=true;
            this.open = false;
        }
        else if(this.connexion) this.mod_ins=false;
        else {
            this.connexion=true;
            this.open = false;
        }
    },
    inscrire(){
        if(!this.mod_ins){
            this.mod_ins=true;
            this.connexion=false;
            this.open = false;
        }
        else if(!this.connexion) this.mod_ins=false;
        else this.connexion=false;
    },
    panier(){
        if(!this.mod_panier){
            this.mod_panier=true;
            this.client=true;
        }
        else if(this.client) this.mod_panier=false;
        else this.client=true;
    },
    _client(){
        if(!this.mod_panier){
            this.mod_panier=true;
            this.client=false;
        }
        else if(!this.client) this.mod_panier=false;
        else this.client=false;
    },
    init(){
        window.addEventListener('logSuccess', event => {
            this.mod_ins = false;
            this.mod_panier = false;
        });
        window.addEventListener('deconnecter', event => {
            this.mod_ins = false;
            this.mod_panier = false;
        });
        {{-- window.addEventListener('notConnected', event => {
            setTimeout(() => {
                this.conNotif = true;
            }, 200);
            setTimeout(() => {
                this.conNotif = false;
            }, 5000);
        }); --}}
    },
    partage(){
        let shareData = {
            title: 'Kongoterra',
            text: 'Allez-y visiter ce site web très interessant',
            url: 'https://kongoterra.com'
        }
        window.navigator.share(shareData)
        //console.log(shareData)
    }
}" @scroll.window="isScrollAtTop = (window.pageYOffset > 60) ? false : true" x-init="init()">
    <div class="flex px-2 py-3 2xl:px-64 lg:px-5 md:px-24 xl:px-24 bg-gray-50 " >
        <div class="flex items-center justify-center gap-5">
            <a href="/">
                <img src="{{asset('img/logo/logo.png')}}" alt="" class="w-10 transition duration-500 transform md:w-20" >
            </a>
            <div class="flex flex-col items-start justify-center" x-show="isScrollAtTop" x-transition.500ms>
                <h2 class="hidden lg:flex">Kongoterra</h2>
                <h3>Votre santé mérite le meilleur</h3>
            </div>
        </div>
        <div class="flex items-center justify-end flex-1 gap-2">
            <div class="flex justify-center items-center pl-2 border border-gray-500">
                <h2> <svg class="w-8 h-8 p-1 text-green-500 " fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z"></path></svg></h2>
                <a href="https://www.facebook.com/sharer/sharer.php?u=https%3A//www.kongoterra.com/" class="p-1 text-white " target="_blank"> 
                    {{-- <svg class="w-8 h-8 p-1 text-green-500 border border-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z"></path></svg> --}}
                    <svg class="w-8 h-8 p-1" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" xml:space="preserve" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path style="fill:#4D6FA9;" d="M476.69,512H35.31C15.89,512,0,496.11,0,476.69V35.31C0,15.89,15.89,0,35.31,0H476.69 C496.11,0,512,15.89,512,35.31V476.69C512,496.11,496.11,512,476.69,512"></path> <path style="fill:#FFFFFF;" d="M432.552,88.276v88.276h-79.448c-9.71,0-17.655,7.945-17.655,17.655v52.966h88.276v88.276h-88.276 V512h-88.276V335.448h-70.621v-88.276h70.621v-52.966c0-55.614,42.372-101.517,97.103-105.931H432.552z"></path> </g></svg>
                </a>
                <a href="https://twitter.com/intent/tweet?text=https%3A//www.kongoterra.com/" class="p-1 text-white border-2 " target="_blank"> 
                    <svg class="w-8 h-8 p-1 " version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 511.537 511.537" xml:space="preserve" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path style="fill:#65BBF2;" d="M357.038,49.172c-59.284,0.898-105.993,52.098-105.993,111.382v14.372 C145.052,156.063,92.954,127.319,35.466,67.137c-34.133,66.47,3.593,122.161,44.912,152.702c-27.846,0-51.2-3.593-69.165-19.761 c-1.796-0.898-3.593,0-2.695,1.797c15.27,55.691,67.368,96.112,107.789,107.789c-36.828,0-61.081,5.389-87.13-10.779 c-1.796-0.898-3.593,0-2.695,1.796c19.761,54.793,59.284,71.86,116.772,71.86c-28.744,21.558-67.368,43.116-140.126,44.912 c-2.695,0-4.491,3.593-1.796,5.389c26.947,22.456,93.418,39.523,186.835,39.523c153.6,0,278.456-136.533,278.456-305.404v-8.982 c24.253-8.982,37.726-30.54,44.912-52.098c0-0.898-0.898-1.796-1.797-1.796l-51.2,17.965c-0.898,0-1.796-1.796-0.898-2.695 C479.2,92.288,495.368,70.73,502.554,50.07c0,0-0.898-0.898-1.797-0.898c-24.253,9.881-47.607,19.761-65.572,25.151 c-2.695,0.898-6.288,0.898-8.982-0.898C414.526,67.137,379.494,49.172,357.038,49.172"></path> </g></svg>
                </a>
            </div>
            
            {{-- <div x-show="!isScrollAtTop">
                <img src="{{asset('img/logo/logo.png')}}" alt="" class="transition duration-500 transform " :class="{'w-28':isScrollAtTop, 'w-10':!isScrollAtTop}">
            </div> --}}
        </div>
    </div>
    <nav class="bg-gray-900 2xl:px-64 lg:px-5 md:px-24 xl:px-24" x-data="
        {
            nav : [true, false, false, false, false, false],
            navig(id){
                if(this.nav[id] != true){
                    this.nav[id] = true;
                }
            },
            about : false,
            parti : false
        }
    " >
        <div class="mx-auto" >
            <div class="{{-- items-center justify-center --}} hidden lg:flex ">
                <a href="/" @click="navig(0)" :class="{'text-green-400' : nav[0], 'text-white' : nav[0], 'text-gray-200' : !nav[0]}" class="h-full py-3 pr-10 text-lg transition duration-300 hover:text-gray-400">Accueil</a>
                <div class="h-full py-3 text-lg transition duration-300 cursor-pointer hover:text-gray-400">
                    <p @mouseover="about=true" class="flex items-center justify-center gap-3 px-2 text-gray-200">A propos de nous <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg></p>
                    <div class="absolute flex flex-col p-1 px-6 bg-gray-100" x-show="about" @mouseover.away="about=false" style="z-index: 5000;">
                        @foreach ($abouts as $ns)
                        @if ($loop->index != 0 && $loop->index != 1 && $loop->index != 3)
                        <a href="{{ route('about', ['id'=> $ns->id]) }}" class="h-full px-6 py-3 text-lg text-gray-700 transition duration-300 border-b hover:text-gray-400">{{$ns->titre}}</a>
                        @endif
                        @endforeach
                        
                        {{-- <a href="{{route('rapport')}}" class="h-full px-6 py-3 text-lg text-gray-200 transition duration-300 hover:text-gray-400">Rappors</a> --}}
                    </div>
                </div>
                {{-- <a href="/#domaines" class="h-full px-6 py-3 text-lg text-gray-200 transition duration-300 hover:text-gray-400">Secteurs d'activité</a> --}}
                <a href="/#produits" class="h-full px-2 py-3 text-lg text-gray-200 transition duration-300 hover:text-gray-400">Nos Produits</a>
                <a href="/#services" class="h-full px-2 py-3 text-lg text-gray-200 transition duration-300 hover:text-gray-400">Nos services</a>
                <a href="{{-- {{route("tem")}} --}}https://maison-artemisia.org/temoignages" class="h-full px-6 py-3 text-lg text-gray-200 transition duration-300 hover:text-gray-400" target="_blank">Temoignages</a>
                <a href="/#Actu" class="h-full px-2 py-3 text-lg text-gray-200 transition duration-300 hover:text-gray-400">Actualités</a>
                @if (session()->get('client') != null)
                <div class="flex items-center justify-end flex-1 gap-5 text-red-600">
                    <a href="#" class="h-full py-3 text-lg text-green-500 transition duration-300 hover:text-gray-400" @click="panier()">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                        </svg>
                    </a>
                    <a href="#" class="flex h-full gap-2 px-3 py-3 text-lg text-white transition duration-300 bg-green-500 hover:text-gray-400" @click="_client()">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                        </svg>
                        {{session()->get('client')->noms}}
                    </a>
                </div> 
                @else    
                <div class="flex items-center justify-end flex-1 gap-5 text-red-600">
                    <a href="#" class="h-full py-3 text-lg text-green-500 transition duration-300 hover:text-gray-400" @click="connecter()">Connexion</a>
                    <a href="#" class="h-full py-3 text-lg text-green-500 transition duration-300 hover:text-gray-400" @click="inscrire()">Inscription</a>
                </div>
                @endif
            </div>
            <div class="flex items-center justify-between px-2 py-2 lg:hidden">
                <p class="font-bold text-green-600">Kongoterra</p>
                <button href="#" class="h-full px-3 py-1 text-lg text-gray-200 transition duration-300 border hover:text-gray-400" @click="open=!open">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path></svg>
                </button>
            </div>
            <div class="z-0 flex flex-col bg-gray-900 lg:hidden" x-show="open" x-transition.500ms @click.outside="open=false">
                <a href="/" class="h-full px-10 py-3 text-lg text-white transition duration-300 bg-green-600 hover:text-gray-200 hover:bg-gray-100">Accueil</a>
                <a href="/#produits" class="h-full px-6 py-3 text-lg text-gray-200 transition duration-300 hover:text-gray-400">Nos Produits</a>
                <a href="/#services" class="h-full px-6 py-3 text-lg text-gray-200 transition duration-300 hover:text-gray-400">Nos services</a>
                <a href="{{-- {{route("tem")}} --}}https://maison-artemisia.org/temoignages" class="h-full px-6 py-3 text-lg text-gray-200 transition duration-300 hover:text-gray-400" target="_blank">Temoignages</a>
                <a href="/#Actu" class="h-full px-6 py-3 text-lg text-gray-200 transition duration-300 hover:text-gray-400">Actualités</a>
                <div class="h-full py-3 text-lg transition duration-300 cursor-pointer hover:text-gray-400">
                    <p @click="about=true" class="flex gap-3 px-6 text-gray-200">A propos de nous <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg></p>
                    <div class="flex flex-col p-1 px-6 " x-show="about" @click.away="about=false">
                        @foreach ($abouts as $ns)
                        <a href="{{ route('about', ['id'=> $ns->id]) }}" class="h-full px-6 py-3 text-lg text-gray-200 transition duration-300 border-b hover:text-gray-400">{{$ns->titre}}</a>
                        @endforeach
                        
                        {{-- <a href="{{route('rapport')}}" class="h-full px-6 py-3 text-lg text-gray-200 transition duration-300 hover:text-gray-400">Rappors</a> --}}
                    </div>
                </div>
                @if (session()->get('client') != null)
                    Connecté(e)!
                @else    
                <div class="flex items-center justify-center flex-1 gap-5 text-red-600 border-t">
                    <a href="#" class="flex-1 h-full py-3 text-lg text-center text-green-500 transition duration-300 border-r hover:text-gray-400" @click="connecter()">Connexion</a>
                    <a href="#" class="flex-1 h-full py-3 text-lg text-center text-green-500 transition duration-300 hover:text-gray-400" @click="inscrire()">Inscription</a>
                </div>
                @endif
               
                {{-- <div class="flex items-center justify-center flex-1 gap-5 text-red-600 border-t">
                    <a href="#" class="flex-1 h-full py-3 text-lg text-center text-green-500 transition duration-300 border-r hover:text-gray-400" @click="connecter()">Connexion</a>
                    <a href="#" class="flex-1 h-full py-3 text-lg text-center text-green-500 transition duration-300 hover:text-gray-400" @click="inscrire()">Inscription</a>
                </div> --}}
                {{-- <div class="h-full py-3 text-lg text-gray-200 transition duration-300 cursor-pointer hover:text-gray-400">
                    <p @click="parti=!parti" class="flex gap-3 px-6">Participer / Soutenir <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg></p>
                    
                    <div class="flex flex-col p-1 px-6 bg-gray-100 border-t border-b" x-show="parti" @click.away="parti=false">
                        <a href="{{route('part', ['el'=>'0'])}}" class="h-full px-6 py-3 text-lg text-gray-200 transition duration-300 border-b hover:text-gray-400">Participer</a>
                        <a href="{{route('part', ['el'=>'1'])}}" class="h-full px-6 py-3 text-lg text-gray-200 transition duration-300 hover:text-gray-400">Faire un don</a>
                    </div>
                </div>
                <a href="#partenaires" class="h-full px-6 py-3 text-lg text-gray-200 transition duration-300 hover:text-gray-400">Partenaires</a> --}}
            </div>
        </div>
    </nav>
    {{-- Connexion / Inscription --}}
    <div class=" 2xl:px-64 lg:px-5 md:px-24 xl:px-24 animate__animated" :class="{'animate__bounceInDown':mod_ins, 'animate__bounceOut': !mod_ins}" x-show="mod_ins" x-transition.500ms>
        <livewire:component.c-log>
    </div>
    <div class=" animate__animated 2xl:px-64 lg:px-5 md:px-24 xl:px-24" :class="{'animate__bounceInDown':mod_panier, 'animate__bounceOut': !mod_panier}" x-show="mod_panier" x-transition.500ms>
        <livewire:component.c-user-panier>
    </div>

</div>
