<div>
    {{-- The Master doesn't talk, he acts. --}}
    <livewire:client.v-nav>
        <div class="flex flex-col items-center justify-center mt-48">
            <header class="flex flex-col items-center justify-end object-cover w-full py-1 font-bold text-white bg-green-600 header-back" {{-- style="background-image: url({{asset('img/USA_Coast_Sunrises_and_sunsets_Marinas_San_589198_1280x853.jpg')}});" --}}>
                <h1>Description de l'annonce</h1>
            </header>
            <div class="w-full py-1 bg-gray-100"></div>
            <livewire:component.vue-detail-produit :produit="$detail">
            
        </div>
        {{-- <div class="flex flex-col items-center justify-center py-3 overflow-hidden text-black bg-gray-100 md:py-10 lg:px-0" id="annonces">
            <div class="py-5 text-center md:py-10 md:pb-20">
                <h1 class="font-bold md:text-xl">DECOUVREZ NOS SELECTIONS D'EXCLUSIVITÉS</h1>
            </div>
            
            <button class="flex flex-col items-center justify-center w-4/5 gap-4 p-3 mt-10 text-xl text-blue-900 lg:w-1/3 md:w-11/12">
                <svg class="w-6 h-6 animate__slideInDown animate__animated animate__infinite" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path></svg>
                <span class=" animate__bounceIn animate__animated animate__infinite animate__slower">Clic ici pour voir plus</span>
            </button>
        </div> --}}
        
        {{-- <livewire:footer :contacts="$contacts" :comptes="$comptes"> --}}
</div>
