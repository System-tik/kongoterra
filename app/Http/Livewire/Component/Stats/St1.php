<?php

namespace App\Http\Livewire\Component\Stats;

use Livewire\Component;

class St1 extends Component
{
    public $icon;
    public $val;
    public $text;
    public $color;
    public function render()
    {
        return view('livewire.component.stats.st1');
    }

    public function mount($icon, $text, $val, $color){
        $this->icon = $icon;
        $this->text = $text;
        $this->val = $val;
        $this->color = $color;
    }
}
