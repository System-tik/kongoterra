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
    public $photo;
    public $services;
    public $sous = [];
    public $ab;
    public $selectedID2;

    public function render()
    {
        $this->services = service::all();
        return view('livewire.admin.v-service');
    }



    /* Add sous point */
    public function add(){
        array_push($this->sous, $this->ab);
        $this->ab = "";
    }

    /* edit sous point */
    public function edit($id){
        $this->selectedID2 = $id;
        $this->ab = $this->sous[$id];
    }

    /* update sous point */
    public function upsous(){
        $this->sous[$this->selectedID2] = $this->ab;
        $this->ab = "";
    }
    /* delete sous point */
    public function delsous(){
        array_splice($this->sous, $this->selectedID2, 1);
        $this->ab = "";
    }

    public function delallsous()
    {
        $this->sous = [];
        $validate = $this->validate([
            "nom" => 'required',
            "descrip" => 'required',
            "sous"=>'array',
        ]);

        $record = service::find($this->selectedID);
        $record->update($validate);
        session()->flash("message", "Modifications effectuées avec succès");
        $this->dispatchBrowserEvent("crud");
        $this->resetInputs();
        /* dd($this->sous); */

    }







    /* Reset inputs */
    public function resetInputs(){
        $this->titre = "";
        $this->descrip = "";
        $this->sous = [];
        $this->selectedID = "";
        $this->ab = "";
    }
    /* store data function */
    public function store(){
        $validate = $this->validate([
            "nom" => 'required',
            "descrip" => 'required',
            "sous"=>'array',
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
        $this->sous=$data["sous"];
        if(!empty($data["sous"])){
            $this->sous = $data["sous"];
        }
        else $this->sous =[];
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
            "sous"=>$this->sous
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
