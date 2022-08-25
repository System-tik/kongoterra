<a href="#" class="flex flex-col items-start justify-end w-full bg-cover rounded-xl" style="background-image:url('{{asset(str_replace('public', 'storage', Storage::files('public/produits/'.$produit->id)[0]))}}?{{ rand()}}'); height:200px;" >
    {{-- Because she competes with no one, no one can compete with her. --}}
    <div class="flex items-center justify-between w-full px-2 bg-t-black rounded-b-xl">
        <div class="flex flex-col items-start text-white">
            <b class="text-xl">{{ $produit->prix }} Fc</b>
            <p>{{ $produit->nom }}</p>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3" />
        </svg>
    </div>
</a>
