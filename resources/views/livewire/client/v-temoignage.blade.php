
<div class="mt-48" x-data="{form:false}">
    <div style=" background-image:url('{{asset('img/fond/28117669335_529a14633f_b.jpg')}}')" class="object-cover w-full h-40">
        <div class="flex flex-col items-center justify-center w-full h-full px-5 py-10 text-left xl:px-72 lg:px-32 md:px-24" style="background: linear-gradient(90deg, rgba(255, 255, 255, 0.925) 0%, rgba(255,255,255,1) 35%, rgba(0, 0, 0, 0) 100%); ">
            {{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}
            <h1 class="w-full text-xl text-center lg:text-left lg:text-3xl">TEMOIGNAGES</h1>
        </div>
    </div>
    <div class="flex flex-col items-center w-full px-5 text-left xl:px-72 lg:px-32 md:px-24" style="background: linear-gradient(180deg, rgba(255, 255, 255, 0.925) 0%, rgba(255,255,255,1) 35%, rgba(0, 129, 28, 0.082) 100%); ">
        <div class="p-5 text-xl">
            <p class="pb-5">Vous êtes médecin, professionnel de la santé, responsable d’un centre et vous prescrivez de l’Artemisia ?</p>
            <p class="pb-5">
                Nous recueillons des données de suivis de patients de façon anonyme, afin d’avoir quelques chiffres, documenter les effets de l’artemisia sur les personnes atteintes de paludisme, et comprendre d’éventuels échecs de traitement.
            </p>
            <p class="">
                Merci de nous aider à recueillir ces données qui nous sont très importantes pour la reconnaissance de l’Artemisia ! Chaque professionnel intéressé peut entrer en contact avec nous, pour avoir plus d’informations sur l’organisation de la collecte de données et participer à ce travail.
            </p>
        </div>
        <div class="flex flex-col items-start w-full p-5">
            <h1 class="pt-5 pb-3 text-left text-green-600 text-7xl">Ils en parlent</h1>
            <p class="py-5 text-xl text-green-600">Vos témoignages comptent. Ils peuvent permettre, en très grand nombre, de faire reconnaitre l’efficacité d’un traitement.</p>

            <div class="flex items-center justify-center w-full py-10">
                <button class="px-16 py-4 text-lg text-white bg-green-600 hover:bg-green-700" @click="form=true">Vous souhaitez témoigner</button>
            </div>
        </div>
        <div class="p-5" x-data="{
            ecrit : true,
        }">
            <div class="flex items-center justify-center gap-10 pb-10 text-xl">
                <button @click="ecrit=true" class="pb-2 border-b-2" :class="{'border-green-600':ecrit, 'border-transparent':!ecrit}">Les témoignages ecrits</button>
                <button @click="ecrit=false" class="pb-2 border-b-2" :class="{'border-green-600':!ecrit, 'border-transparent':ecrit}">Les témoignages videos</button>
            </div>
            <div class="">
                {{-- Temoignage ecrit --}}
                <div class="" x-show="ecrit">
                    ecrit
                </div>
                {{-- Temoignage video --}}
                <div class="" x-show="!ecrit">
                    video
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path d="M12 14l9-5-9-5-9 5 9 5z" />
                        <path d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z" />
                      <path stroke-linecap="round" stroke-linejoin="round" d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222" />
                    </svg>
                </div>
            </div>
        </div>
    </div>

    {{-- Modal formulaire --}}
    <div class="fixed top-0 left-0 flex flex-col items-center justify-center w-screen h-screen px-5 py-5 text-left xl:px-96 lg:px-32 md:px-24 bg-t-black" x-show="form" x-transition.1500ms>
        <div class="w-full p-5 bg-white">
            <div class="flex items-center justify-end">
                <button class="p-5 text-xl" @click="form=false">X</button>
            </div>
            <div class="px-20">
                <h1 class="pt-5 pb-3 text-4xl text-left text-green-600">Vous avez la parole</h1>
                <p class="py-5">
                    Vous souhaitez partager votre expérience avec l'Artemisia. La parole est à vous ! Un très grand merci pour votre témoignage.
                </p>
            </div>
        </div>
    </div>

</div>
