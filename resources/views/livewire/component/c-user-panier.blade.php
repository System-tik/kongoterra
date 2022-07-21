<div class="grid text-white lg:grid-cols-3 " x-data>
    <div class="grid p-5 lg:col-start-3 lg:grid-cols-1" style="background: linear-gradient(180deg, rgba(17, 24, 39, 0.925) 0%, rgba(0, 0, 0, 0.836) 35%, rgb(17, 24, 39) 100%); ">
        <div class="border-gray-600" x-show="!client">
            <div class="flex justify-between pb-4 border-b border-gray-700">
                <h1 class="text-xl lg:text-2xl">client</h1>
                <button @click="mod_panier=false">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-red-800" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </button>
            </div>
            <div class="flex flex-col gap-5 py-5">
                {{-- Identite client --}}
                @if (session()->get('client') != null)
                    
                <div class="flex border">
                    <div class="p-2 border">
                        Noms
                    </div>
                    <p class="p-2">
                        {{ session()->get('client')->noms }}
                    </p>
                </div>
                <div class="flex border">
                    <div class="p-2 border">
                        Telephone
                    </div>
                    <p class="p-2">
                        {{ session()->get('client')->tel }}
                    </p>
                </div>
                <div class="flex border">
                    <div class="p-2 border">
                        Email
                    </div>
                    <p class="p-2">
                        {{ session()->get('client')->email }}
                    </p>
                </div>
                <div class="flex border">
                    <div class="p-2 border">
                        Deconnexion
                    </div>
                    <button class="flex-1 px-5 py-2 text-center text-white bg-red-800" wire:click="deconnecter">
                        Deconnectez-vous ici
                    </button>
                </div>
                @endif
                
            </div>
        </div>
        <div class="" x-show="client">
            <div class="flex items-center justify-between pb-4 border-b border-gray-700">
                <h1 class="text-xl lg:text-2xl">Panier</h1>
                <button @click="mod_panier=false">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-red-800" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </button>
            </div>
            <div class="flex flex-col gap-5 py-5">
                {{-- Panier --}}
                @if (session()->get('client') != null)
                    <livewire:component.c-shopping-cart>
                @endif
                
                
            </div>
        </div>
    </div>
</div>