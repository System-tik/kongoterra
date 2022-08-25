<?php

namespace App\Http\Livewire\Mobile;

use Livewire\Component;
use App\Models\produit;
use Livewire\WithPagination;

class MProduits extends Component
{
    public $search;
    public function render()
    {   
        $term =$this->search??'';
        return view('livewire.mobile.m-produits',[
            'produits' => produit::where('nom', 'like', '%'.$term.'%')->get()
        ]);
    }
}
