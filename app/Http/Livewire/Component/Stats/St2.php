<?php

namespace App\Http\Livewire\Component\Stats;

use Livewire\Component;

class St2 extends Component
{

    public $icon;
    public $val;
    public $text;
    public $color;
    public $bg;
    public function render()
    {
        return view('livewire.component.stats.st2');
    }

    public function mount($icon, $text, $val, $color, $bg){
        $this->icon = $icon;
        $this->text = $text;
        $this->val = $val;
        $this->color = $color;
        $this->bg = $bg;
    }
    
}
