<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\client;
use App\Models\commande;
use App\Models\service;

class Dash extends Component
{
    public $clients;
    public $commandes;
    public $services;
    public function render()
    {
        $this->clients = client::all()->count();
        $this->commandes = commande::all()->count();
        $this->services = service::all()->count();
        return view('livewire.admin.dash');
    }
}
