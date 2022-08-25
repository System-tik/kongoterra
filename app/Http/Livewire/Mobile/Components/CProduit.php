<?php

namespace App\Http\Livewire\Mobile\Components;

use Livewire\Component;

class CProduit extends Component
{
    public $produit;
    public function render()
    {
        return view('livewire.mobile.components.c-produit');
    }
    public function mount($produit){
        /* dd($produit); */
        $this->produit = $produit;
    }
}
