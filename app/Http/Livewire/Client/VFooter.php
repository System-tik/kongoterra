<?php

namespace App\Http\Livewire\Client;

use Livewire\Component;
use App\Models\info;
use App\Models\Partenaire;

class VFooter extends Component
{
    public $infos;
    public $partenaires;
    public function render()
    {
        $this->partenaires = Partenaire::all();
        $this->infos = info::all();
        return view('livewire.client.v-footer');
    }
}
