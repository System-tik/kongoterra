<?php

namespace App\Http\Livewire\Client;

use Livewire\Component;
use App\Models\about;

class VNav extends Component
{
    public $abouts;
    protected $listeners = ['reRenderParent'];

    public function render()
    {
        $this->abouts = about::get(['titre', 'id']);
        return view('livewire.client.v-nav');
    }
    public function reRenderParent()
    {
        $this->mount();
        $this->render();
    }
}
