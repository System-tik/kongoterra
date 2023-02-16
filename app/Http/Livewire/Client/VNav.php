<?php

namespace App\Http\Livewire\Client;

use Livewire\Component;
use App\Models\about;
use App\Models\actu;

class VNav extends Component
{
    public $abouts;
    public $actus;
    protected $listeners = ['reRenderParent'];

    public function render()
    {
        $this->abouts = about::get(['titre', 'id']);
        $this->actus = actu::all();
        return view('livewire.client.v-nav');
    }
    public function reRenderParent()
    {
        $this->mount();
        $this->render();
    }
}
