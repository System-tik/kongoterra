<?php

namespace App\Http\Livewire\Component;

use Livewire\Component;
use App\Models\shoppingcart;
use App\Models\produit;
use Illuminate\Support\Facades\DB;

class CShoppingCart extends Component
{
    public $paniers;
    public $produits;
    public $total = 0;
    protected $listeners = ['reRenderParent'];

    public function render()
    {
        return view('livewire.component.c-shopping-cart');
    }
    public function mount(){
        $this->paniers = shoppingcart::where(['client_id'=> session()->get('client')->id, 'etat'=>'0'])->first();
        //array_push($this->paniers->produits[0], ["nom" => "pondu"]);
        if($this->paniers != null){
            $this->produits = produit::all();
            for ($i=0; $i < count($this->paniers['produits']); $i++) { 
                # code...
                for ($j=0; $j < count($this->produits); $j++) { 
                    # code...
                    $idp = $this->paniers['produits'][$i]['idp'];
                    if($idp == $this->produits[$j]->id){
                        $this->total += $this->paniers['produits'][$i]['qte'] * $this->produits[$j]->prix;
                    }
                }
            }
        }
    }
    
    public function reRenderParent()
    {
        $this->mount();
        $this->render();
    }

}
