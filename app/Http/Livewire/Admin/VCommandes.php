<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\produit;
use App\Models\commande;
use App\Models\catp;

class VCommandes extends Component
{
    public $produits;
    public $commandes;
    public $commandesl;
    public $catagories;
    public $selectedID;
    public $produits_cmd;
    public $total = 0;
    public $cmd;
    protected $listeners = ['crud'=>'$refresh'];

    public function render()
    {
        $this->produits = produit::join('catps', 'catps.id', '=', 'produits.catp_id')->get(['produits.*', 'catps.lib']);
        $this->produits_cmd;
        $this->commandes = commande::join('magasins', 'magasins.id', '=', 'commandes.mag_id')
                                    ->join('shoppingcarts', 'shoppingcarts.id', '=', 'commandes.panier_id')
                                    ->join('clients', 'clients.id', '=', 'shoppingcarts.client_id')
                                    ->join('villes', 'villes.id', '=', 'magasins.ville_id')
                                    ->join('provinces', 'provinces.id', '=', 'villes.idpro')
                                    ->where('commandes.etat', '!=','ok')
                                    ->get([
                                        'commandes.*', 
                                        'shoppingcarts.produits', 
                                        'magasins.nom as nmag', 
                                        'magasins.adresse', 
                                        'clients.noms', 
                                        'clients.tel', 
                                        'clients.email',
                                        'villes.nom as ville', 
                                        'provinces.nom as province'
                                    ]);
        $this->commandesl = commande::join('magasins', 'magasins.id', '=', 'commandes.mag_id')
                                    ->join('shoppingcarts', 'shoppingcarts.id', '=', 'commandes.panier_id')
                                    ->join('clients', 'clients.id', '=', 'shoppingcarts.client_id')
                                    ->join('villes', 'villes.id', '=', 'magasins.ville_id')
                                    ->join('provinces', 'provinces.id', '=', 'villes.idpro')
                                    ->where('commandes.etat', '=','ok')
                                    ->get([
                                        'commandes.*', 
                                        'shoppingcarts.produits', 
                                        'magasins.nom as nmag', 
                                        'magasins.adresse', 
                                        'clients.noms', 
                                        'clients.tel', 
                                        'clients.email',
                                        'villes.nom as ville', 
                                        'provinces.nom as province'
                                    ]);
        /* dd($this->commandes); */
        
        return view('livewire.admin.v-commandes');
    }

    public function choixC($cmd){
        $this->total = 0;
        $this->selectedID = $cmd["id"];
        $this->cmd = $cmd;
        $this->produits_cmd = $cmd['produits'];
        for ($i=0; $i < count($this->produits_cmd); $i++) { 
            # code...
            for ($j=0; $j < count($this->produits); $j++) { 
                # code...
                $idp = $this->produits_cmd[$i]['idp'];
                if($idp == $this->produits[$j]->id){
                    $this->total += $this->produits_cmd[$i]['qte'] * $this->produits[$j]->prix;
                }
            }
        }
        /* dd($this->produits_cmd); */
    }

    public function update($etat){
        $record = commande::find($this->selectedID);
        /* dd($record); */
        $record->update(['etat' => $etat]);
        session()->flash("message", "Modifications effectuées avec succès");
        $this->dispatchBrowserEvent("crud");
    }
}
