<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\info;

class VInfo extends Component
{
    public $infos;
    
    /* proprietes de la classe info */
    public $titre;
    public $icon;
    public $contenu;
    public $type;//select of tel|email|text or lien

    public $selectedID;

    public function render()
    {
        $this->infos = info::all();
        return view('livewire.admin.v-info');
    }

    /* Reset inputs */
    public function resetInputs(){
        $this->titre = "";
        $this->icon = "";
        $this->contenu = "";
        $this->type = "";
        $this->selectedID = "";
    }

    /* store data function */
    public function store(){
        $validate = $this->validate([
            "titre" => 'required',
            "icon" => 'required',
            "contenu" => 'required',
            "type" => 'required',
        ]);

        info::create($validate);
        session()->flash("message", "Enregistrement effectué avec succès");
        $this->dispatchBrowserEvent("crud");
        $this->resetInputs();
    }
    
    /* select datas for updating */
    public function fillInputs($data){
        $this->titre = $data["titre"];
        $this->icon = $data["icon"];
        $this->contenu = $data["contenu"];
        $this->type = $data["type"];
        $this->selectedID = $data["id"];
    }

    /* updating record */
    public function update(){
        $validate = $this->validate([
            "titre" => 'required',
            "icon" => 'required',
            "contenu" => 'required',
            "type" => 'required',
        ]);

        $record = info::find($this->selectedID);
        $record->update([
            "titre" => $this->titre,
            "icon" => $this->icon,
            "contenu" => $this->contenu,
            "type" => $this->type,
        ]);
        session()->flash("message", "Modifications effectuées avec succès");
        $this->dispatchBrowserEvent("crud");
    }

    /* delete record */
    public function delete(){
        $this->validate(["selectedID" => "required"]);
        $record = info::find($this->selectedID);
        $record->delete($record);
        session()->flash("message", "Modifications effectuées avec succès");
        $this->dispatchBrowserEvent("crud");
    }
}

