<?php

namespace App\Http\Livewire\Component\Stats;

use Livewire\Component;
use App\Models\service;
use App\Models\produit;

class St3 extends Component
{
    public $services;
    public $produit;
    public function render()
    {
        $this->services = service::all();
        $this->produits = produit::all();
        return view('livewire.component.stats.st3');
    }
}
