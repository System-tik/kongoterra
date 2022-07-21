<?php

namespace App\Http\Livewire\Component;

use Livewire\Component;

class CUserPanier extends Component
{
    protected $listeners = ['reRenderParent'];

    public function render()
    {
        return view('livewire.component.c-user-panier');
    }
    public function reRenderParent()
    {
        $this->mount();
        $this->render();
    }
    public function deconnecter(){
        session()->forget('client');
        $this->emit('reRenderParent');
        $this->dispatchBrowserEvent("deconnecter");
    }
}
