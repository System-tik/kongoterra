<div class="px-5 border-b lg:py-32 xl:px-72 lg:px-32 md:px-24" id="produits">
    <h1 class="py-2 mb-5 border-t-2 "> Produits à base de l'artémisia</h1>
    <div class="grid grid-cols-1 gap-4 md:grid-cols-2 lg:grid-cols-4">
        @if (count($produits) > 0)
            
        @foreach ($produits as $pro)
        <livewire:component.produit-card :produit="$pro" />
        @endforeach
        @endif
        
        
    </div>
    <div class="py-2">
        {{ $produits->links() }}
    </div>
</div>