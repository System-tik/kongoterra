<?php

namespace App\Http\Livewire\Client\Home;

use Livewire\Component;
use App\Models\about;

class VAbout extends Component
{
    public $abouts;
    public $sous;
    public function render()
    {
        $this->abouts = about::get(['titre', 'sous', 'id']);
        $this->sous = $this->abouts[4]["sous"];
        /* dd(explode(":", $this->sous[0])); */
        
        return view('livewire.client.home.v-about');
    }
}
