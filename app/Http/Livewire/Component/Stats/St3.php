<?php

namespace App\Http\Livewire\Component\Stats;

use Livewire\Component;

class St3 extends Component
{
    public $val;
    public $titre;
    public $icon;
    public function render()
    {   
        return view('livewire.component.stats.st3');
    }

    public function mount($val, $titre, $icon){
        $this->val = $val;
        $this->titre = $titre;
        $this->icon = $icon;
    }
}
