<?php

namespace App\Http\Livewire\Client;

use Livewire\Component;
use App\Models\service; 

class VServiceDetail extends Component
{
    public $services;
    public function render()
    {
        return view('livewire.client.v-service-detail');
    }

    public function mount($idS){
        $this->services = service::find($idS);
    }
}
