<div class="bg-white div-welcome spaceInRight" style=" width:200%" x-data="{con:true, click:false}">
    <div class="w-1/2 h-full transition duration-700 transform bg-white px-96" 
        >
        <div class="relative z-10 inline w-1/4 h-full p-2 transition duration-700 transform bg-green-700" :class="con ? (click ? 'slide-right-1' : '') : 'slide-left-1'">
            {{-- Pour ramener à l'inscription dans le div --}}
            <div x-show="con" class="">
                <h1>Ici kdkdkdk</h1>
                <p>
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quis ullam deserunt eius quos dicta, hic veritatis quasi reprehenderit, beatae voluptas, voluptatem dolorem obcaecati voluptates et? Dicta magnam reprehenderit quisquam dolor.
                </p>
                <button class="relative p-3 transition duration-500 transform border text-clack" @click="con=!con;click=true">
                    Inscription
                </button>
                </div>
                {{-- Pour ramener à la connexion dans le div --}}
                <div x-show="!con">
                    <h1>Ici kdkdkdk</h1>
                <p>
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quis ullam deserunt eius quos dicta, hic veritatis quasi reprehenderit, beatae voluptas, voluptatem dolorem obcaecati voluptates et? Dicta magnam reprehenderit quisquam dolor.
                </p>
                <button class="relative p-3 transition duration-500 transform border text-clack" @click="con=!con;click=true">
                    Connexion
                </button>
            </div>
            
        </div>
        <div class="relative inline w-3/4 h-full transition duration-700 transform " :class="con ? (click ? 'slide-right-2' : '') : 'slide-left-2'">
            {{-- Connexion formulaire dans le div --}}
            <div x-show="con">
                <p class="">Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa laudantium commodi cumque nesciunt aliquam in eius quaerat perspiciatis, quasi hic provident similique eveniet quibusdam consequatur iste! Fugiat tempore voluptates inventore!</p>
            </div>
            {{-- Inscription formulaire dans le div --}}
            <div x-show="!con">
                <p class="">Inscription ici ipsum dolor sit amet consectetur adipisicing elit. Culpa laudantium commodi cumque nesciunt aliquam in eius quaerat perspiciatis, quasi hic provident similique eveniet quibusdam consequatur iste! Fugiat tempore voluptates inventore!</p>
            </div>
        </div>
    </div>
    
</div>