<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\client;
use App\Models\commande;
use App\Models\service;
use App\Models\magasin;
use App\Models\actu;
use App\Models\produit;
use App\Models\info;

class Dash extends Component
{
    public $clients;
    public $commandes;
    public $services;
    public $actus;
    public $produits;
    public $infos;
    public $magasins;
    public $menus;
    public function render()
    {
        $this->clients = client::all()->count();
        $this->commandes = commande::all()->count();
        $this->services = service::all()->count();
        $this->actus = actu::all()->count();
        $this->produits = produit::all()->count();
        $this->infos = info ::all()->count();
        $this->magasins = magasin ::all()->count();
        return view('livewire.admin.dash');
    }
    public function mount($menus){
        $this->menus = $menus;
    }
}
