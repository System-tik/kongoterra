<?php

namespace App\Http\Livewire\Client;

use Livewire\Component;
use App\Models\about;
use App\Models\actu;
use App\Models\service;

class VNav extends Component
{
    public $abouts;
    public $actus;
    public $services;
    protected $listeners = ['reRenderParent'];

    public function render()
    {
        $this->abouts = about::get(['titre', 'id']);
        $this->actus = actu::all();
        $this->services = service::all();
        return view('livewire.client.v-nav');
    }
    public function reRenderParent()
    {
        $this->mount();
        $this->render();
    }
}
