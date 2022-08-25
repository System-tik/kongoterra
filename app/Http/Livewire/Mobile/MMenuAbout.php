<?php

namespace App\Http\Livewire\Mobile;

use Livewire\Component;

class MMenuAbout extends Component
{
    public $navs = ["identité", "Vision", "Mission"];
    public function render()
    {
        return view('livewire.mobile.m-menu-about');
    }
}
