<?php

namespace App\Http\Livewire\Client;

use Livewire\Component;
use App\Models\shoppingcart;
use App\Models\magasin;
use App\Models\produit;
use App\Models\commande;
use Livewire\WithPagination;

class VCommande extends Component
{
    public $paniers;
    public $produits;
    public $total = 0;
    public $mag_id;
    public $panier_id;
    protected $listeners = ['reRenderParent'];
    public function render()
    {
        return view('livewire.client.v-commande', ['magasins' => magasin::paginate(4)]);
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

    function s_mag($id){
        $this->mag_id = $id;
    }

    function modifQte($index, $qte){
        $this->produits_p = $this->paniers->produits;
        $this->produits_p[$index]['qte'] = $qte;
        //dd($this->produits_p, $qte, $index);
        $this->paniers->update([
            'produits' => $this->produits_p
        ]);
        $this->emit('reRenderParent');
    }
    
    public function reRenderParent()
    {
        $this->mount();
        $this->render();
    }
    public function cmder(){
        $this->panier_id = $this->paniers->id;
        if(isset($this->mag_id)){
            $cmd = $this->validate([
                'mag_id'=>'required',
                'panier_id'=>'required',
            ]);
            commande::create($cmd);
            
            $this->paniers->update([
                'etat' => '1'
            ]);
            $this->emit('reRenderParent');
        }
        else{
            $this->dispatchBrowserEvent("magasin");
        }
    }
}
