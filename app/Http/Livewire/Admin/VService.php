<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\service;
use Livewire\WithFileUploads;

class VService extends Component
{
    use WithFileUploads;

    public $nom;
    public $descrip;
    public $soustitre;
    public $photo;
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
        $this->soustitre="";
        $this->selectedID = "";
    }

    /* store data function */
    public function store(){
        $validate = $this->validate([
            "nom" => 'required',
            "descrip" => 'required',
            "soustitre"=>'required',
            "photo"=>'required'
        ]);

        $record=service::create($validate);
        $this->photo->storePubliclyAs('public/service', $record->id.'.png');
        session()->flash("message", "Enregistrement effectué avec succès");
        $this->dispatchBrowserEvent("crud");
        $this->resetInputs();
    }
    
    /* select datas for updating */
    public function fillInputs($data){
        $this->nom = $data["nom"];
        $this->descrip = $data["descrip"];
        $this->soustitre=$data["soustitre"];

        $this->selectedID = $data["id"];
    }

    /* updating record */
    public function update(){
        $validate = $this->validate([
            "nom" => 'required',
            "descrip" => 'required',
            "soustitre"=>'required'
        ]);

        $record = service::find($this->selectedID);
        $record->update([
            "nom" => $this->nom,
            "descrip" => $this->descrip,
            "soustitre"=>$this->soustitre
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
