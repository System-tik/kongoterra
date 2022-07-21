<?php

namespace App\Http\Livewire\Client;

use Livewire\Component;
use App\Models\info;

class VFooter extends Component
{
    public $infos;
    public function render()
    {
        $this->infos = info::all();
        return view('livewire.client.v-footer');
    }
}
