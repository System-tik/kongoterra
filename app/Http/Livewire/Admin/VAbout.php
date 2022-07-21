<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\about;
class VAbout extends Component
{
    public $abouts;
    
    /* proprietes de la classe about */
    public $titre;
    public $descrip;
    public $sous = [];
    public $ab;

    public $selectedID;
    public $selectedID2;

    
    public function render()
    {
        $this->abouts = about::all();
        return view('livewire.admin.v-about');
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
            "titre" => 'required',
            "descrip" => 'required',
            "sous" => "array"
        ]);
        /* dd($validate); */

        about::create($validate);
        session()->flash("message", "Enregistrement effectué avec succès");
        $this->dispatchBrowserEvent("crud");
        $this->resetInputs();
    }
    
    /* select datas for updating */
    public function fillInputs($data){
        $this->titre = $data["titre"];
        $this->descrip = $data["descrip"];
        if(!empty($data["sous"])){
            $this->sous = $data["sous"];
        }
        else $this->sous =[];
        $this->selectedID = $data["id"];
        /* dd($data["sous"]); */
    }

    /* updating record */
    public function update(){
        $validate = $this->validate([
            "titre" => 'required',
            "descrip" => 'required',
            "sous" => 'nullable',
        ]);

        $record = about::find($this->selectedID);
        $record->update([
            "titre" => $this->titre,
            "descrip" => $this->descrip,
            "sous" => $this->sous,
        ]);
        session()->flash("message", "Modifications effectuées avec succès");
        $this->dispatchBrowserEvent("crud");
        $this->resetInputs();
        /* dd($this->sous); */
    }

    /* delete record */
    public function delete(){
        $this->validate(["selectedID" => "required"]);
        $record = about::find($this->selectedID);
        $record->delete($record);
        session()->flash("message", "Modifications effectuées avec succès");
        $this->dispatchBrowserEvent("crud");
    }
}
