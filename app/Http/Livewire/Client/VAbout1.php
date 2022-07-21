<?php

namespace App\Http\Livewire\Client;

use Livewire\Component;
use App\Models\about;

class VAbout1 extends Component
{
    public $abouts;
    public $idE;
    public function render()
    {
        return view('livewire.client.v-about1');
    }

    public function mount($idE){
        $this->idE = $idE;
        $this->abouts = about::find($idE);
    }
}
