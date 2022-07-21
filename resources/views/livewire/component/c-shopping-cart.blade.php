<div x-data>
    {{-- If you look to others for fulfillment, you will never truly be fulfilled. --}}
    <div class="flex flex-col">
        @if ($paniers != null)
        @foreach ($paniers->produits as $panier)
        @foreach ($produits as $p)
          @if ($panier['idp'] == $p->id)    
          <div class="flex items-center py-2 border-b">
              <div class="px-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                </svg>
              </div>
              <p class="flex-1 px-2 border-l border-r">{{$p->nom}}</p>
              <p class="px-2 border-r">{{$panier['qte']}} x {{$p->prix}} FC</p>
              <p class="px-2">{{$panier['qte'] * $p->prix}} FC</p>
              <input type="hidden" name="" wire:model="somme({{$panier['qte'] * $p->prix}})">
          </div>
          @endif  
        @endforeach
        @endforeach
        <div class="flex items-center justify-between">
            <p>Total :  </p>
            <b>{{$total}} FC</b>
        </div>
        @else
            <p>Aucun produit dans le panier</p>
        @endif
    </div>
    @if ($paniers != null)    
    <div class="flex justify-end pt-5">
        <a href="{{ route('commander') }}" class="px-10 py-2 text-white bg-green-600" wire:click="inscrire">
            Confirmer la commande
        </a>
    </div>
    @endif
</div>
