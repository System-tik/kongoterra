<?php

namespace App\Http\Livewire\Component;

use Livewire\Component;
use App\Models\shoppingcart;
use App\Models\magasin;
use Livewire\WithPagination;

class VueDetailProduit extends Component
{
    public $produit;
    public $qte;
    protected $listeners = ['reRenderParent'];
    public $produits_p = [];
    //public $magasins;

    public function render()
    {
        return view('livewire.component.vue-detail-produit', ['magasins' => magasin::paginate(4)]);
    }

    public function mount($produit){
        $this->produit = $produit;
        $this->qte = 0;
    }

    function ajouter(){
        $this->qte = $this->qte + 1;
    }
    function diminuer(){
        if($this->qte > 0) $this->qte = $this->qte - 1;
    }
    function panier(){
        if(session()->get('client') != null){
            /* dd("connecté"); */
            if($this->qte > 0){
                $paniers = shoppingcart::where(['client_id'=> session()->get('client')->id, 'etat'=>'0'])->first();
                if($paniers == null){
                    //creer
                    array_push($this->produits_p, ["idp"=> $this->produit->id, "qte" => $this->qte]);
                    $paniers = shoppingcart::create([
                        'client_id' => session()->get('client')->id,
                        'produits' => $this->produits_p
                    ]);
                    $this->emit('reRenderParent');
                }
                else{
                    $this->produits_p = $paniers->produits;
                    array_push($this->produits_p, ["idp"=> $this->produit->id, "qte" => $this->qte]);
                    $paniers->update([
                        'produits' => $this->produits_p
                    ]);
                    $this->emit('reRenderParent');
                    /* dd($this->produits_p); */
                }
            }
            else{
                $this->dispatchBrowserEvent("qte");
            }
        }
        else{
            $this->dispatchBrowserEvent("notConnected");
        }
    }
    public function reRenderParent()
    {
        $this->mount($this->produit);
        $this->render();
    }
}
