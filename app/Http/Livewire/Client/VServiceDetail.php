<?php

namespace App\Http\Livewire\Client;

use Livewire\Component;
use App\Models\service; 

class VServiceDetail extends Component
{
    public $services;
    public $servs;
    public $idS;

    public function render()
    {
        $this->servs = service::all();
        return view('livewire.client.v-service-detail');
    }

    public function mount($idS){
        $this->idS = $idS;
        $this->services = service::find($idS);
    }
}
