@if (count($produits) > 0)
<div class="px-5 border-b lg:py-32 2xl:px-64 lg:px-5 md:px-24 xl:px-24" id="produits">
    <h1 class="py-2 mb-5 border-t-2 "> Nos produits</h1>
    <div class="grid grid-cols-1 gap-4 md:grid-cols-2 lg:grid-cols-4">
            
        @foreach ($produits as $pro)
        <livewire:component.produit-card :produit="$pro" />
        @endforeach
        
        
    </div>
    <div class="py-2">
        {{ $produits->links() }}
    </div>
</div>
@endif