<?php

namespace App\Http\Livewire\Client\Home;

use Livewire\Component;
use App\Models\about;

class VHeader extends Component
{
    public $abouts;
    public function render()
    {
        $this->abouts = about::get(['titre', 'descrip']);
        return view('livewire.client.home.v-header');
    }
}
