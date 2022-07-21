<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\client;
use App\Models\commande;

class Dash extends Component
{
    public $clients;
    public $commandes;
    public function render()
    {
        $this->clients = client::all()->count();
        $this->commandes = commande::all()->count();
        return view('livewire.admin.dash');
    }
}
