<div class="grid text-white lg:grid-cols-3 " x-data>
    <div class="grid p-5 lg:col-start-3 lg:grid-cols-1" style="background: linear-gradient(180deg, rgba(17, 24, 39, 0.925) 0%, rgba(0, 0, 0, 0.836) 35%, rgb(17, 24, 39) 100%); ">
        <div class="border-gray-600" x-show="connexion">
            <div class="flex justify-between pb-4 border-b border-gray-700">
                <h1 class="text-xl lg:text-2xl">Connexion</h1>
                <button @click="mod_ins=false">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-red-800" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </button>
            </div>
            <div class="flex flex-col gap-5 py-5">
                {{-- Formaulaire connexion --}}
                <div class="flex">
                    <div class="flex items-center justify-center px-5 border">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                        </svg>
                    </div>
                    <input type="text" placeholder="Numero de contact" class="w-full text-black border-4 border-white" wire:model="tel">
                    @error('mdp') <span class="text-red-600">{{ $message }}</span><br> @enderror
                </div>
                <div class="flex">
                    <div class="flex items-center justify-center px-5 border">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8 11V7a4 4 0 118 0m-4 8v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2z" />
                        </svg>
                    </div>
                    <input type="password" placeholder="Mot de passe" class="w-full text-black border-4 border-white" wire:model="mdp">
                    @error('mdp') <span class="text-red-600">{{ $message }}</span><br> @enderror
                </div>
                <div class="flex justify-end">
                    <button class="px-10 py-2 text-white bg-green-600" wire:click="connecter">
                        Se connecter
                    </button>
                </div>
            </div>
        </div>
        <div class="" x-show="!connexion">
            <div class="flex items-center justify-between pb-4 border-b border-gray-700">
                <h1 class="text-xl lg:text-2xl">Création d'un compte client</h1>
                <button @click="mod_ins=false">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-red-800" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </button>
            </div>
            <div class="flex flex-col gap-5 py-5">
                {{-- Formaulaire Inscription --}}
                <div class="flex">
                    <div class="flex items-center justify-center px-5 border">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                        </svg>
                    </div>
                    <input type="text" placeholder="Nom & Prenom" class="w-full text-black border-4 border-white" wire:model="noms"><br>
                    @error('noms') <span class="text-red-600">{{ $message }}</span><br> @enderror
                </div>
                <div class="flex">
                    <div class="flex items-center justify-center px-5 border">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                    </div>
                    <input type="text" placeholder="Email" class="w-full text-black border-4 border-white" wire:model="email">
                    @error('email') <span class="text-red-600">{{ $message }}</span><br> @enderror
                </div>
                <div class="flex">
                    <div class="flex items-center justify-center px-5 border">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                        </svg>
                    </div>
                    <input type="text" placeholder="Numero de contact" class="w-full text-black border-4 border-white" wire:model="tel">
                    @error('tel') <span class="text-red-600">{{ $message }}</span><br> @enderror
                </div>
                <div class="flex">
                    <div class="flex items-center justify-center px-5 border">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8 11V7a4 4 0 118 0m-4 8v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2z" />
                        </svg>
                    </div>
                    <input type="password" placeholder="Mot de passe" class="w-full text-black border-4 border-white" wire:model="mdp">
                    @error('mdp') <span class="text-red-600">{{ $message }}</span><br> @enderror
                    
                </div>
                
                <div class="flex justify-end">
                    <button class="px-10 py-2 text-white bg-green-600" wire:click="inscrire">
                        Créer un compte
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    window.addEventListener('confirm',event => {
        console.log(event.detail.message);
    })
    window.addEventListener('echec',event => {
        console.log(event.detail.message);
    })

</script>