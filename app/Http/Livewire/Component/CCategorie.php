<?php

namespace App\Http\Livewire\Component;

use Livewire\Component;
use App\Models\catp;

class CCategorie extends Component
{
    public $lib;
    public $catps;
    public $selectedID;
    protected $listeners = ['send'=>'fillInputs'];

    public function render()
    {
        $this->catps = catp::all();
        return view('livewire.component.c-categorie');
    }
    /* Reset inputs */
    public function resetInputs(){
        $this->lib = "";
        $this->selectedID = "";
    }

    /* store data function */
    public function store(){
        $validate = $this->validate([
            "lib" => 'required',
        ]);

        catp::create($validate);
        session()->flash("message", "Enregistrement effectué avec succès");
        $this->dispatchBrowserEvent("crud");
        $this->resetInputs();
        $this->emit("crud");
    }
    
    /* select datas for updating */
    public function fillInputs($data){
        $this->lib = $data["lib"];
        $this->selectedID = $data["id"];
    }

    /* updating record */
    public function update(){
        $validate = $this->validate([
            "lib" => 'required',
        ]);

        $record = catp::find($this->selectedID);
        $record->update([
            "lib" => $this->lib,
        ]);
        session()->flash("message", "Modifications effectuées avec succès");
        $this->dispatchBrowserEvent("crud");
        $this->emit("crud");
    }

    /* delete record */
    public function delete(){
        $this->validate(["selectedID" => "required"]);
        $record = catp::find($this->selectedID);
        $record->delete($record);
        session()->flash("message", "Modifications effectuées avec succès");
        $this->dispatchBrowserEvent("crud");
        $this->emit("crud");
    }
}
