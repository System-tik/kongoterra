<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\service;

class VService extends Component
{
    public $nom;
    public $descrip;
    public $services;
    public function render()
    {
        $this->services = service::all();
        return view('livewire.admin.v-service');
    }

    /* Reset inputs */
    public function resetInputs(){
        $this->nom = "";
        $this->descrip = "";
        $this->selectedID = "";
    }

    /* store data function */
    public function store(){
        $validate = $this->validate([
            "nom" => 'required',
            "descrip" => 'required',
        ]);

        service::create($validate);
        session()->flash("message", "Enregistrement effectué avec succès");
        $this->dispatchBrowserEvent("crud");
        $this->resetInputs();
    }
    
    /* select datas for updating */
    public function fillInputs($data){
        $this->nom = $data["nom"];
        $this->descrip = $data["descrip"];
        $this->selectedID = $data["id"];
    }

    /* updating record */
    public function update(){
        $validate = $this->validate([
            "nom" => 'required',
            "descrip" => 'required',
        ]);

        $record = service::find($this->selectedID);
        $record->update([
            "nom" => $this->nom,
            "descrip" => $this->descrip,
        ]);
        session()->flash("message", "Modifications effectuées avec succès");
        $this->dispatchBrowserEvent("crud");
    }

    /* delete record */
    public function delete(){
        $this->validate(["selectedID" => "required"]);
        $record = service::find($this->selectedID);
        $record->delete($record);
        session()->flash("message", "Modifications effectuées avec succès");
        $this->dispatchBrowserEvent("crud");
    }
}
