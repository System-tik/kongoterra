<?php

namespace App\Http\Livewire\Component;

use Livewire\Component;
use App\Models\province;

class CProvince extends Component
{
    public $nom;
    public $provinces;
    public $selectedID;

    public function render()
    {
        $this->provinces = province::all();
        return view('livewire.component.c-province');
    }

    /* Reset inputs */
    public function resetInputs(){
        $this->nom = "";
        $this->selectedID = "";
    }

    /* store data function */
    public function store(){
        $validate = $this->validate([
            "nom" => 'required',
        ]);

        province::create($validate);
        session()->flash("message", "Enregistrement effectué avec succès");
        $this->dispatchBrowserEvent("crud");
        $this->resetInputs();
        $this->emit("crud");
    }
    
    /* select datas for updating */
    public function fillInputs($data){
        $this->nom = $data["nom"];
        $this->selectedID = $data["id"];
    }

    /* updating record */
    public function update(){
        $validate = $this->validate([
            "nom" => 'required',
        ]);

        $record = province::find($this->selectedID);
        $record->update([
            "nom" => $this->nom,
        ]);
        session()->flash("message", "Modifications effectuées avec succès");
        $this->dispatchBrowserEvent("crud");
        $this->emit("crud");
    }

    /* delete record */
    public function delete(){
        $this->validate(["selectedID" => "required"]);
        $record = province::find($this->selectedID);
        $record->delete($record);
        session()->flash("message", "Modifications effectuées avec succès");
        $this->dispatchBrowserEvent("crud");
        $this->emit("crud");
    }
}
