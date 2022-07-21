<?php

namespace App\Http\Livewire\Client\Home;

use Livewire\Component;
use App\Models\produit;
use Livewire\WithPagination;

class VProduit extends Component
{
    //public $produits;
    public $excep;
    public function render()
    {
        $produits = produit::all();   
        return view('livewire.client.home.v-produit', [
            'produits'=>($this->excep == null) ?
            produit::paginate(4) :
            produit::where('id', '!=', $this->excep)->paginate(4)
        ]);
    }

    public function mount($excep){
        $this->excep = $excep;
    }
}
