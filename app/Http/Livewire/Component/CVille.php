<?php

namespace App\Http\Livewire\Component;

use Livewire\Component;
use App\Models\province;
use App\Models\ville;

class CVille extends Component
{
    public $nom;
    public $idpro;
    public $selectedID;

    public $provinces;
    public $villes;

    protected $listeners = ['province' => 'fillP', 'crud' => '$refresh'];

    public function render()
    {
        $this->villes = ville::join('provinces', 'provinces.id', '=', 'villes.idpro')->get(['villes.*', 'provinces.nom as prov']);
        $this->provinces = province::all();
        return view('livewire.component.c-ville');
    }

    public function fillP($idp){
        $this->idpro = $idp;
    }
    /* Reset inputs */
    public function resetInputs(){
        $this->nom = "";
        $this->idpro = "";
        $this->selectedID = "";
    }

    /* store data function */
    public function store(){
        $validate = $this->validate([
            "nom" => 'required',
            "idpro" => 'required',
        ]);

        ville::create($validate);
        session()->flash("message", "Enregistrement effectué avec succès");
        $this->dispatchBrowserEvent("crud");
        $this->resetInputs();
        $this->emit("crud");
    }
    
    /* select datas for updating */
    public function fillInputs($data){
        $this->nom = $data["nom"];
        $this->idpro = $data["idpro"];
        $this->selectedID = $data["id"];
    }

    /* updating record */
    public function update(){
        $validate = $this->validate([
            "nom" => 'required',
            "idpro" => 'required',
        ]);

        $record = ville::find($this->selectedID);
        $record->update([
            "nom" => $this->nom,
            "idpro" => $this->nom,
        ]);
        session()->flash("message", "Modifications effectuées avec succès");
        $this->dispatchBrowserEvent("crud");
        $this->emit("crud");
    }

    /* delete record */
    public function delete(){
        $this->validate(["selectedID" => "required"]);
        $record = ville::find($this->selectedID);
        $record->delete($record);
        session()->flash("message", "Modifications effectuées avec succès");
        $this->dispatchBrowserEvent("crud");
        $this->emit("crud");
    }
}
