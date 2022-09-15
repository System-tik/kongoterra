
<div class="" x-data="{
    notifU : false,
    spinner : false,
    form:false,
    init(){
        window.addEventListener('temoignage', event => {
            this.spinner = false;
            setTimeout(() => {
                this.notifU = true;
                this.form = false;
            }, 500);
            setTimeout(() => {
                this.notifU = false;
            }, 3000);
        });
    },
    notifier(){
        setTimeout(() => {
            this.notifU = true;
        }, 500);
        setTimeout(() => {
            this.notifU = false;
        }, 5000);
    }
}">
    <div style=" background-image:url('{{asset('img/fond/africankids.jpeg')}}')" class="object-cover w-full h-40">
        <div class="flex flex-col items-center justify-center w-full h-full px-5 py-10 text-left 2xl:px-64 lg:px-5 md:px-24 xl:px-24" style="background: linear-gradient(90deg, rgba(255, 255, 255, 0.925) 0%, rgba(255,255,255,1) 35%, rgba(0, 0, 0, 0) 100%); ">
            {{-- k --}}
            <h1 class="w-full text-xl text-center lg:text-left lg:text-3xl">TEMOIGNAGES</h1>
        </div>
    </div>
    <div class="flex flex-col items-center w-full px-5 text-left 2xl:px-64 lg:px-5 md:px-24 xl:px-24" style="background: linear-gradient(180deg, rgba(255, 255, 255, 0.925) 0%, rgba(255,255,255,1) 35%, rgba(0, 129, 28, 0.082) 100%); ">
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
        <div class="w-full p-5" x-data="{
            ecrit : true,
        }">
        @if (count($temoignages) > 0)
            
        <div class="flex items-center justify-center gap-10 pb-10 text-xl">
            <button @click="ecrit=true" class="pb-2 border-b-2" :class="{'border-green-600':ecrit, 'border-transparent':!ecrit}">Les témoignages ecrits</button>
            <button @click="ecrit=false" class="pb-2 border-b-2" :class="{'border-green-600':!ecrit, 'border-transparent':ecrit}">Les témoignages videos</button>
        </div>
        <div class="w-full">
            {{-- Temoignage ecrit --}}
            <div class="grid w-full grid-cols-2 gap-10 p-5" x-show="ecrit">
                @foreach ($temoignages as $tem)    
                <div class="flex flex-col p-5 shadow-2xl">
                    <div class="flex-1 w-full">
                        <b>
                            <svg  class="" style="" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M13 14.725c0-5.141 3.892-10.519 10-11.725l.984 2.126c-2.215.835-4.163 3.742-4.38 5.746 2.491.392 4.396 2.547 4.396 5.149 0 3.182-2.584 4.979-5.199 4.979-3.015 0-5.801-2.305-5.801-6.275zm-13 0c0-5.141 3.892-10.519 10-11.725l.984 2.126c-2.215.835-4.163 3.742-4.38 5.746 2.491.392 4.396 2.547 4.396 5.149 0 3.182-2.584 4.979-5.199 4.979-3.015 0-5.801-2.305-5.801-6.275z"/></svg>
                        </b>
                        <p>
                            {{$tem->contenu}}
                        </p>
                    </div>
                    <div class="flex items-center justify-end w-full text-gray-500">
                        <p>par {{$tem->nom}} {{$tem->prenom}}, <b> {{explode(' ', $tem->created_at)[0]}}</b></p>
                    </div>
                </div>                    
                @endforeach
            </div>
            {{-- Temoignage video --}}
            <div class="" x-show="!ecrit">
                @foreach ($temoignages as $tem)   
                @if (strlen($tem->lien) > 0)    
                <div class="flex flex-col p-5 shadow-2xl">
                    <div class="flex-1 w-full">
                        <iframe 
                            class="w-full" 
                            height="720" 
                            src="https://www.youtube.com/embed/{{strpos(explode('/', $tem->lien)[3], '=') == false ? explode('/', $tem->lien)[3] : explode('=', explode('/', $tem->lien)[3])[1]}}" 
                            frameborder="0" 
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                            allowfullscreen>
                        </iframe>
                        <p>
                            {{$tem->contenu}} 
                        </p>
                    </div>
                    <div class="flex items-center justify-end w-full text-gray-500">
                        <p>par {{$tem->nom}} {{$tem->prenom}}, <b> {{explode(' ', $tem->created_at)[0]}}</b></p>
                    </div>
                </div>                    
                @endif 
                @endforeach
            </div>
        </div>
        @else
            <div class="flex items-center justify-center">
                <p class="text-gray-500">Pas des temoignages pour l'instant</p>
            </div>
        @endif
        </div>
    </div>

    {{-- Modal formulaires --}}
    <div class="fixed top-0 left-0 z-0 flex flex-col items-center justify-center w-screen h-screen px-5 pt-5 text-left 2xl:px-96 lg:px-32 md:px-24 bg-t-black 2xl:top-16 xl:px-24" x-show="form" x-transition.1500ms
        x-data="{
            step : 1,
            moins (){
                if(this.step > 1) this.step--
            },
            plus (){
                if(this.step < 5) {
                    switch(this.step){
                        case 1:
                            if($wire.lien != null || $wire.contenu != null) this.step++
                            else this.notifier();
                            break;
                        case 2:
                            if($wire.nom != null && $wire.prenom != null && $wire.adresse != null && $wire.pays != null && $wire.email != null && $wire.tel != null && $wire.age != null && $wire.sexe != null && $wire.enceinte != null) this.step++
                            else this.notifier();
                            break;
                        case 3:
                            if($wire.maladie != null && $wire.methode != null && $wire.signe != null) this.step++
                            else this.notifier();
                            break;
                        case 4:
                            if($wire.center_ttt != null && $wire.prescripteur !=null && $wire.type_prescri != null && $wire.date_t != null && $wire.ttt != null && $wire.type_ttt != null && $wire.dosage != null && $wire.mode_prepar != null && $wire.nb_prise != null && $wire.nb_jour != null) this.step++
                            else this.notifier();
                            break;
                    }
                    
                }
            }
        }"
        style="overflow:auto"
    >
        <div class="w-full p-5 text-gray-500 bg-white">
            <div class="flex items-center justify-end">
                <button class="p-5 text-xl" @click="form=false">X</button>
            </div>
            <div class="px-20">
                <h1 class="pt-5 pb-3 text-4xl text-left text-green-600">Vous avez la parole</h1>
                <p class="py-5">
                    Vous souhaitez partager votre expérience avec l'Artemisia. La parole est à vous ! Un très grand merci pour votre témoignage.
                </p>
                <div class="flex items-center justify-center py-5">
                    <div class="flex items-center justify-center w-8 h-8 border border-gray-300 rounded-full shadow-lg" :class="{'bg-green-600 text-white':step==1}">
                        1
                    </div>
                    <div class="px-2 border border-gray-300"></div>
                    <div class="flex items-center justify-center w-8 h-8 border border-gray-300 rounded-full shadow-lg"  :class="{'bg-green-600 text-white':step==2}">
                        2
                    </div>
                    <div class="px-2 border border-gray-300"></div>
                    <div class="flex items-center justify-center w-8 h-8 border border-gray-300 rounded-full shadow-lg"  :class="{'bg-green-600 text-white':step==3}">
                        3
                    </div>
                    <div class="px-2 border border-gray-300"></div>
                    <div class="flex items-center justify-center w-8 h-8 border border-gray-300 rounded-full shadow-lg"  :class="{'bg-green-600 text-white':step==4}">
                        4
                    </div>
                    <div class="px-2 border border-gray-300"></div>
                    <div class="flex items-center justify-center w-8 h-8 border border-gray-300 rounded-full shadow-lg"  :class="{'bg-green-600 text-white':step==5}">
                        5
                    </div>
                </div>
                <div class="flex flex-col px-20 overflow-y-auto" style="height:46vh;">
                    <div class="flex-1 py-2">
                        {{-- step 1 --}}
                        <p class="text-red-600" x-show="notifU" x-transition.500ms>Vous devez remplir les champs</p>
                        <div class="" x-show="step==1">
                            <div class="py-2 text-2xl">
                                <h3>Votre témoignage</h3>
                            </div>
                            <div class="py-5">
                                <label for="lien" class="block text-sm font-medium text-gray-700">Envoyer votre témoignage par vidéo...</label>
                                <div class="flex mt-1 rounded-md shadow-sm">
                                    <span class="inline-flex items-center px-3 text-sm text-gray-500 border border-r-0 border-gray-300 rounded-l-md bg-gray-50"> https:// </span>
                                    <input type="text" wire:model="lien" id="lien" class="flex-1 block w-full h-10 border-gray-500 rounded-none focus:ring-indigo-500 focus:border-indigo-500 rounded-r-md sm:text-sm" placeholder="">
                                </div>
                            </div>
                            <div class="py-4">
                                <label for="" class="block text-sm font-medium text-gray-700">Ou bien écrivez-le</label>
                                <div class="flex rounded-md shadow-sm">
                                    <textarea wire:model="contenu" id="" rows="5" class="flex-1 w-full border-gray-300 rounded-none focus:ring-indigo-500 focus:border-indigo-500 rounded-r-md sm:text-sm"></textarea>
                                </div>
                            </div>
                            <div class="flex items-center gap-10">
                                <div class="">
                                    <h4>Ajouter une photo</h4>
                                    <span>(Format JPG ou PNG max. 2Mb)</span>
                                </div>
                                
                                <div class="flex flex-col items-start justify-start " x-data="{ isUploading : false, progress : 0 }"
                                    x-on:livewire-upload-start="isUploading = true"
                                    x-on:livewire-upload-finish="isUploading = false" 
                                    x-on:livewire-upload-error="isUploading = false"
                                    x-on:livewire-upload-progress="progress = $event.detail.progress">
                                    <div class="flex w-full gap-5 py-2">
                                        {{-- Button ajouter gallerie des dans images --}}
                                        <label class="flex flex-col items-center justify-center w-full px-4 py-1 tracking-wide text-green-500 uppercase transition-all duration-150 ease-linear bg-white border border-green-500 rounded-md shadow-md cursor-pointer hover:bg-green-600 hover:text-white">
                                            <span class="px-3 mt-2 text-base leading-normal">Parcourrir image</span>
                                            <input type="file" class="hidden" wire:model="photo"  />
                                            <div x-show="isUploading" class="h-full">
                                                <progress max="100" x-bind:value="progress">
                                                    <b x-text="progress"></b>%
                                                </progress>
                                            </div>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- step 2 --}}
                        <div class="" x-show="step==2">
                            <div class="py-2 text-2xl">
                                <h3>Informations Personnelles</h3>
                            </div>
                            <div class="grid grid-cols-2 gap-10 py-5">
                                <div class="">
                                    <div class="">
                                        <label for="text" class="block text-sm font-medium text-gray-700">Nom*</label>
                                        <div class="flex rounded-nmd">
                                            <input wire:model="nom" type="text" class="flex-1 block w-full border-gray-300 focus:ring-indigo-500 focus:border-indigo-500 rounded-r-md sm:text-sm">
                                        </div>
                                    </div>
                                    <div class="py-3">
                                        <label for="text" class="block text-sm font-medium text-gray-700">Adresse*</label>
                                        <div class="flex rounded-nmd">
                                            <input wire:model="adresse" type="text" class="flex-1 block w-full border-gray-300 focus:ring-indigo-500 focus:border-indigo-500 rounded-r-md sm:text-sm">
                                        </div>
                                    </div>
                                    <div class="">
                                        <label for="email" class="block text-sm font-medium text-gray-700">Email*</label>
                                        <div class="flex rounded-nmd">
                                            <input wire:model="email" type="email" class="flex-1 block w-full border-gray-300 focus:ring-indigo-500 focus:border-indigo-500 rounded-r-md sm:text-sm">
                                        </div>
                                    </div>
                                </div>  
                                <div class="">
                                    <div class="">
                                        <label for="text" class="block text-sm font-medium text-gray-700">Prenom*</label>
                                        <div class="flex rounded-nmd">
                                            <input wire:model="prenom" type="text" class="flex-1 block w-full border-gray-300 focus:ring-indigo-500 focus:border-indigo-500 rounded-r-md sm:text-sm">
                                        </div>
                                    </div>
                                    <div class="py-3">
                                        <label for="text" class="block text-sm font-medium text-gray-700">Pays*</label>
                                        <div class="flex rounded-nmd">
                                            <input wire:model="pays" type="text" class="flex-1 block w-full border-gray-300 focus:ring-indigo-500 focus:border-indigo-500 rounded-r-md sm:text-sm">
                                        </div>
                                    </div>
                                    <div class="">
                                        <label for="tel" class="block text-sm font-medium text-gray-700">Téléphone*</label>
                                        <div class="flex rounded-nmd">
                                            <input wire:model="tel" type="tel" class="flex-1 block w-full border-gray-300 focus:ring-indigo-500 focus:border-indigo-500 rounded-r-md sm:text-sm">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid grid-cols-4 gap-10">
                                <div class="">
                                    <label for="" class="block text-sm font-medium text-gray-700">Age*</label>
                                    <div class="flex rounded-nmd">
                                        <input wire:model="age" type="number" class="flex-1 block w-full border-gray-300 focus:ring-indigo-500 focus:border-indigo-500 rounded-r-md sm:text-sm">
                                    </div>
                                </div>
                                <div class="">
                                    <label for="" class="block text-sm font-medium text-gray-700">Sexe*</label>
                                    <div class="flex rounded-nmd">
                                        <select wire:model="sexe" id="">
                                            <option default="Homme" value="M">Homme</option>
                                            <option value="F">Femme</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="">
                                    <label for="" class="block text-sm font-medium text-gray-700">Enceinte*</label>
                                    <div class="flex rounded-nmd">
                                        <select wire:model="enceinte"id="">
                                            <option default="1" value="1">Oui</option>
                                            <option value="0">Non</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="py-6">
                                    <h4>*Champs obligatoire</h4>
                                </div>
                            </div>
                        </div>
                        {{-- step 3 --}}
                        <div class="" x-show="step==3">
                            <div class="py-2 text-2xl">
                                <h3>Maladie</h3>
                            </div>
                            <div class="grid grid-cols-2 gap-10 py-5">
                                <div class="">
                                    <label for="" class="block text-sm font-medium text-gray-700">Maladie traitée*</label>
                                    <div class="flex rounded-nmd">
                                        <input wire:model="maladie" type="text" class="flex-1 block w-full border-gray-300 focus:ring-indigo-500 focus:border-indigo-500 rounded-r-md sm:text-sm">
                                    </div>
                                </div>
                                <div class="">
                                    <label for="" class="block text-sm font-medium text-gray-700">Méthode de diagnostic*</label>
                                    <div class="flex rounded-nmd">
                                        <input wire:model="methode" type="text" class="flex-1 block w-full border-gray-300 focus:ring-indigo-500 focus:border-indigo-500 rounded-r-md sm:text-sm">
                                    </div>
                                </div>
                            </div>
                            {{--  --}}
                            <div class="py-2">
                                <h3>Singnes cliniques et traitement par l'Artemisia <i>(Plusieurs choix possible)</i></h3>
                            </div>
                            {{-- {{var_export($signe)}} --}}
                            <div class="grid grid-cols-3 gap-5">
                                @foreach ($cols1 as $col)       
                                <div class="">
                                    {{-- {{$col}} --}}
                                    @foreach (array_splice($signes, 0, 6) as $sig)    
                                    <div class="form-check">
                                        <input value="{{$sig}}" wire:model="signe" class="float-left w-4 h-4 mt-1 mr-2 align-top transition duration-200 bg-white bg-center bg-no-repeat bg-contain border border-gray-300 rounded-sm appearance-none cursor-pointer form-check-input checked:bg-blue-600 checked:border-blue-600 focus:outline-none" type="checkbox"  id="{{$sig}}">
                                        <label class="inline-block text-gray-800 form-check-label" for="{{$sig}}">
                                            {{$sig}}
                                        </label>
                                    </div>
                                    @endforeach
                                </div>
                                @endforeach
                            </div>
                            <div class="items-end py-5 text-right">
                                <h4>*Champs obligatoire</h4>
                            </div>
                        </div>
                        {{-- step 4 --}}
                        <div class="" x-show="step==4">
                            <div class="py-2 text-2xl">
                                <h3>Traitement</h3>
                            </div>
                            <div class="py-5">
                                <label for="" class="block text-sm font-medium text-gray-700">Centre de traitement* <i class="text-gray-400">(Domicile ou centre de santé avec adresse complète à préciser)</i></label>
                                <div class="flex rounded-md">
                                    <input wire:model="center_ttt" type="text" name="lien" id="lien" class="block w-full border-gray-300 rounded-none rounded-r-md sm:text-sm" placeholder="">
                                </div>
                            </div>
                            <div class="grid grid-cols-2 gap-10">
                                <div class="">
                                    <label for="" class="block text-sm font-medium text-gray-700">Prescrit par*</label>
                                    <div class="flex rounded-nmd">
                                        <input wire:model="prescripteur" type="text" class="flex-1 block w-full border-gray-300 focus:ring-indigo-500 focus:border-indigo-500 rounded-r-md sm:text-sm">
                                    </div>
                                </div>
                                <div class="py-6">
                                    <div class="form-check">
                                        <input wire:model="type_prescri" class="float-left w-4 h-4 mt-1 mr-2 align-top transition duration-200 bg-white bg-center bg-no-repeat bg-contain border border-gray-300 rounded-sm appearance-none cursor-pointer form-check-input checked:bg-green-600 checked:border-green-600 focus:outline-none" type="checkbox"  id="typeP">
                                        <label class="inline-block text-gray-800 form-check-label" for="typeP">
                                            Personnel de santé
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="grid grid-cols-2 gap-10">
                                <div class="">
                                    <label for="" class="block text-sm font-medium text-gray-700">Date de début de traitement*</label>
                                    <div class="flex rounded-nmd">
                                        <input wire:model="date_t" type="date" class="flex-1 block w-full border-gray-300 focus:ring-indigo-500 focus:border-indigo-500 rounded-r-md sm:text-sm">
                                    </div>
                                </div>
                            </div>
                            <div class="py-5">
                                <label for="" class="block text-sm font-medium text-gray-700">Plante(s) médicinale(s) utilisée(s) (nom scientifique) et provenance*</label>
                                <div class="flex rounded-md">
                                    <input type="text" wire:model="ttt" class="block w-full border-gray-300 rounded-none rounded-r-md sm:text-sm" placeholder="">
                                </div>
                            </div>
                            <div class="">
                                <div class="py-2">
                                    <h3>Traitement suivi*</h3>
                                </div>
                                <div class="grid grid-cols-3">
                                    <div class="col-span-2">
                                        <div class="grid grid-cols-4 ">
                                            @foreach ($ttts as $t)
                                            <div class="py-2">
                                                <div class="form-check">
                                                    <input value="{{$t}}" wire:model="type_ttt" wire:click="changer('{{$t}}')" class="float-left w-4 h-4 mt-1 mr-2 align-top transition duration-200 bg-white bg-center bg-no-repeat bg-contain border border-gray-300 rounded-full appearance-none cursor-pointer form-check-input checked:bg-green-600 checked:border-green-600 focus:outline-none" type="radio" name="flexRadioDefault" id="{{$t}}">
                                                    <label class="inline-block text-gray-800 form-check-label" for="{{$t}}">
                                                      {{$t}}
                                                    </label>
                                                </div>
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>
                                    <div class="">
                                        <div class="">
                                            @if ($autres)    
                                            <div class="flex rounded-nmd">
                                                <input type="text" class="flex-1 block w-full border-gray-300 focus:ring-indigo-500 focus:border-indigo-500 rounded-r-md sm:text-sm">
                                            </div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid grid-cols-4 gap-10 py-5">
                                <div class="">
                                    <label for="" class="block text-sm font-medium text-gray-700">Dosage* <i class="text-gray-400">(g/personne)</i></label>
                                    <div class="flex rounded-nmd">
                                        <input wire:model="dosage" type="text" class="flex-1 block w-full border-gray-300 focus:ring-indigo-500 focus:border-indigo-500 rounded-r-md sm:text-sm">
                                    </div>
                                </div>
                                <div class="">
                                    <label for="" class="block text-sm font-medium text-gray-700">Mode de préparation*</label>
                                    <div class="flex rounded-nmd">
                                        <input wire:model="mode_prepar" type="text" class="flex-1 block w-full border-gray-300 focus:ring-indigo-500 focus:border-indigo-500 rounded-r-md sm:text-sm">
                                    </div>
                                </div>
                                <div class="">
                                    <label for="" class="block text-sm font-medium text-gray-700">Nb. de prise* <i class="text-gray-400">(/jour)</i></label>
                                    <div class="flex rounded-nmd">
                                        <input wire:model="nb_prise" type="text" class="flex-1 block w-full border-gray-300 focus:ring-indigo-500 focus:border-indigo-500 rounded-r-md sm:text-sm">
                                    </div>
                                </div>
                                <div class="">
                                    <label for="" class="block text-sm font-medium text-gray-700">Nb. de jour*</label>
                                    <div class="flex rounded-nmd">
                                        <input wire:model="nb_jour" type="text" class="flex-1 block w-full border-gray-300 focus:ring-indigo-500 focus:border-indigo-500 rounded-r-md sm:text-sm">
                                    </div>
                                </div>
                            </div>
                            <div class="items-end text-right">
                                <h4>*Champs obligatoire</h4>
                            </div>
                        </div>
                        {{-- step 5 --}}
                        <div class="" x-show="step==5">
                            <div class="py-2 text-2xl">
                                <h3>Observations</h3>
                            </div>
                            <div class="py-2">
                                <h3>Evolution de la température <i class="text-gray-400">(en ॰C)</i></h3>
                            </div>
                            <div class="grid grid-cols-7 gap-5">
                                @foreach ($evolu_temp as $index => $ev)    
                                <div class="">
                                    <div class="flex rounded-nmd">
                                        <label for="" class="block text-2xl font-medium text-gray-700">J{{$loop->index + 1}}</label>
                                        <input wire:model="evolu_temp.{{$index}}" type="text" class="flex-1 block w-full gap-5 border-gray-300 focus:ring-indigo-500 focus:border-indigo-500 rounded-r-md sm:text-sm">
                                    </div>
                                </div>
                                @endforeach
                            </div>
                            <div class="py-2">
                                <h3>Evolution de la Parasitémie <i class="text-gray-400">(en Tph/m3)</i></h3>
                            </div>
                            <div class="grid grid-cols-7 gap-5">
                                @foreach ($evolu_paras as $index => $ev)
                                <div class="">
                                    <div class="flex rounded-nmd">
                                        <label for="" class="block text-2xl font-medium text-gray-700">J{{$ev_p[$loop->index]}}</label>
                                        <input wire:model="evolu_paras.{{$index}}" type="text" class="flex-1 block w-full gap-5 border-gray-300 focus:ring-indigo-500 focus:border-indigo-500 rounded-r-md sm:text-sm">
                                    </div>
                                </div>    
                                @endforeach
                            </div>
                            <div class="py-2">
                                <h3>Effets indésirables observés <i class="text-gray-400">(Plusieurs choix possibles)</i></h3>
                            </div>
                            <div class="grid grid-cols-3 gap-5">
                                @foreach ($cols1 as $col)
                                <div class="">
                                    @foreach (array_splice($effets, 0, 5) as $ef)
                                        
                                    <div class="form-check">
                                        <input value="{{$ef}}" wire:model="effet_ind" class="border border-gray-300 rounded-sm appearance-none cursor-pointer form-check-input" type="checkbox" value="Nausée" id="{{$ef}}">
                                        <label class="inline-block text-gray-800 form-check-label" for="{{$ef}}">
                                            {{$ef}}
                                        </label>
                                    </div>
                                    @endforeach
                                </div>
                                @endforeach
                            </div>
                            <div class="py-5">
                                <h3>Rechute*</h3>
                            </div>
                            <div class="grid grid-cols-2">
                                <div class="">
                                    <div class="grid grid-cols-2">
                                        <div class="">
                                            <div class="form-check">
                                                <input wire:model="rechute" value="non" class="float-left w-4 h-4 mt-1 mr-2 align-top transition duration-200 bg-white bg-center bg-no-repeat bg-contain border border-gray-300 rounded-full appearance-none cursor-pointer form-check-input checked:bg-green-600 checked:border-green-600 focus:outline-none" type="radio" id="rechute">
                                                <label class="inline-block text-gray-800 form-check-label" for="rechute">
                                                  Non
                                                </label>
                                            </div>
                                        </div>
                                        <div class="">
                                            <div class="form-check">
                                                <input wire:model="rechute" value="oui" class="float-left w-4 h-4 mt-1 mr-2 align-top transition duration-200 bg-white bg-center bg-no-repeat bg-contain border border-gray-300 rounded-full appearance-none cursor-pointer form-check-input checked:bg-green-600 checked:border-green-600 focus:outline-none" type="radio" id="rechute1">
                                                <label class="inline-block text-gray-800 form-check-label" for="rechute1">
                                                  Oui, date
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="">
                                    <div class="">
                                        <div class="flex rounded-nmd">
                                            <input wire:model="date_rechute" type="date" class="flex-1 block w-full gap-5 border-gray-300 focus:ring-indigo-500 focus:border-indigo-500 rounded-r-md sm:text-sm">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="py-5">
                                <label for="" class="block text-sm font-medium text-gray-700">Dépistage de résistance <i class="text-gray-400">(Analyse du marquage K13 à J42)</i></label>
                                <div class="flex rounded-md shadow-sm">
                                    <textarea wire:model="dep_res" id="" rows="5" class="flex-1 w-full border-gray-300 rounded-none focus:ring-indigo-500 focus:border-indigo-500 rounded-r-md sm:text-sm"></textarea>
                                </div>
                            </div>
                            <div class="">
                                <label for="" class="block text-sm font-medium text-gray-700">Remarques</label>
                                <div class="flex rounded-md shadow-sm">
                                    <textarea wire:model="remarque" id="" rows="5" class="flex-1 w-full border-gray-300 rounded-none focus:ring-indigo-500 focus:border-indigo-500 rounded-r-md sm:text-sm"></textarea>
                                </div>
                            </div>
                            <div class="items-end py-5 text-right">
                                <h4><i>*Champs obligatoire</i></h4>
                            </div>
                            <div class="items-justify">
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur illo veniam, ipsa repellendus voluptas quis in amet impedit tempora, saepe harum maiores? Modi explicabo eaque esse accusantium officia qui natus.
                                </p>
                                <a href="#" class="">En savoir plus</a>
                            </div>
                            <div class="items-center py-10 text-center">
                                <button class="px-5 py-2 text-white bg-green-600" wire:click="store" @click="spinner=true">Envoyer
                                    <svg x-show="spinner" class="inline-block w-5 h-5 ml-3 -mr-1 text-white animate-spin" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                        <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-center justify-between py-5">
                        <button class="px-5 py-2 text-white bg-green-600" @click="moins()">Précédent</button>
                        <button class="px-5 py-2 text-white bg-green-600"  @click="plus()">Suivant</button>
                    </div>
                    {{-- {{var_export($errors)}} --}}
                </div>
            </div>
        </div>
    </div>

</div>
