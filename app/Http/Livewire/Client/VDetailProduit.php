<?php

namespace App\Http\Livewire\Client;

use Livewire\Component;
use App\Models\produit;

class VDetailProduit extends Component
{
    public $contacts;
    public $comptes;
    public $detail;
    public function render()
    {
        return view('livewire.client.v-detail-produit');
    }

    public function mount($detail){
        $this->detail = produit::join('catps', 'catps.id', '=', 'produits.catp_id')
        ->where('produits.id', '=', $detail)
        ->get(['produits.*', 'catps.lib'])[0];
    }
}
