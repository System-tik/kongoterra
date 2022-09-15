<?php

namespace App\Http\Livewire\Client;

use Livewire\Component;
use App\Models\actu;

class VActuDetail extends Component
{
    public $actus;
    public function render()
    {
        return view('livewire.client.v-actu-detail');
    }

    public function mount($idA){
        $this->actus = actu::find($idA);
    }
}
