<div class="overflow-hidden bg-white" x-data>
   {{-- Be like water. --}}
    <div class="grid grid-rows-2 gap-10">
        <div class="grid grid-cols-3 gap-5">
            <div class="w-full col-span-2 px-5 py-5 rounded shadow bg-slate-50">
                <h1 class="py-2 text-2xl text-gray-500">CLIENTS / COMMANDES</h1>
                <div class="grid grid-cols-2 gap-5">
                    {{-- Clients --}}
                    <div {{-- class="cursor-pointer " @click="afficher(7)" --}}>

                        <livewire:component.stats.st1 text="Nombre des cliens" val="{{$clients}}" color="green" icon="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                    </div>
                    <div @click="afficher(7)" class="cursor-pointer ">
                        <livewire:component.stats.st1 text="Nombre des commandes" val="{{$commandes}}" color="gray" icon="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                    </div>
                    
                </div>
            </div>
            <div class="w-full h-full px-5 py-5 rounded shadow cursor-pointer bg-slate-50">
                <h1 class="py-2 text-2xl text-gray-500">NOS MAGASINS</h1>
                <div class="grid grid-cols-1" @click="afficher(6)">
                    <livewire:component.stats.st2 text="MAGASINS" val="{{$magasins}}" color="slate" bg="gray" icon="M8 14v3m4-3v3m4-3v3M3 21h18M3 10h18M3 7l9-4 9 4M4 10h16v11H4V10z" />
                </div>
            </div>
        </div>
        
        <div class="grid grid-cols-4 gap-5 px-5 h-36">
            <div class="bg-gray-200 cursor-pointer" @click="afficher(4)">
                <livewire:component.stats.st3 titre="Services" val="{{$services}}" icon="{{$menus[4]['icon']}}">
            </div>
            <div class="bg-gray-200 cursor-pointer" @click="afficher(9)" >
                <livewire:component.stats.st3 titre="Actualités" val="{{$actus}}" icon="{{$menus[9]['icon']}}">
            </div>
            <div class="bg-gray-200 cursor-pointer" @click="afficher(1)" >
                <livewire:component.stats.st3 titre="Contacts" val="{{$infos}}" icon="{{$menus[1]['icon']}}">
            </div>
            <div class="bg-gray-200 cursor-pointer" @click="afficher(5)" >
                <livewire:component.stats.st3 titre="Produits" val="{{$produits}}" icon="{{$menus[5]['icon']}}">
            </div>
        </div>
        
    </div>
    
</div>
