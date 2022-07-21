<?php

namespace App\Http\Livewire\Component;

use Livewire\Component;

class ProduitCard extends Component
{
    public $produit;
    public function render()
    {
        return view('livewire.component.produit-card');
    }
    public function favoriser($data){
        //verifier si le user est connecte
    }

    public function mount($produit){
        /* dd($produit); */
        $this->produit = $produit;
    }
}
