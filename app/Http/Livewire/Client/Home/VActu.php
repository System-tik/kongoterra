<?php

namespace App\Http\Livewire\Client\Home;

use Livewire\Component;
use App\Models\actu;

class VActu extends Component
{
    public $actus;
    public function render()
    {
        $this->actus = actu::all();
        return view('livewire.client.home.v-actu');
    }
}
