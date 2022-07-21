<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\magasin;
use App\Models\ville;


class VMagasin extends Component
{ 
    /* proprietes de la classe magasin */
    public $nom;
    public $adresse;
    public $ville_id;
    public $longi;
    public $lat;
    
    public $pr;

    public $selectedID;
    public $selectedID2;

    public $magasins;
    public $villes;


    public function render()
    {
        $this->magasins = magasin::join('villes', 'villes.id', '=', 'magasins.ville_id')
                                ->join('provinces', 'provinces.id', '=', 'villes.idpro')
                                ->get(['magasins.*', 'villes.nom as ville', 'provinces.nom as province']);
        $this->villes = ville::all();
        return view('livewire.admin.v-magasin');
    }

    /* Reset inputs */
    public function resetInputs(){
        $this->nom = "";
        $this->adresse = "";
        $this->ville_id = "";
        $this->longi = "";
        $this->lat = "";
        /* $this->pv = []; */
        $this->selectedID = "";
        $this->pr = "";
    }

    /* store data function */
    public function store(){
        $validate = $this->validate([
            "nom" => 'required',
            "adresse" => 'required',
            "ville_id" => 'required',
            "longi" => 'nullable',
            "lat" => 'nullable',
            /* "pv" => "array" */
        ]);
        /* dd($validate); */

        magasin::create($validate);
        session()->flash("message", "Enregistrement effectué avec succès");
        $this->dispatchBrowserEvent("crud");
        $this->resetInputs();
    }
    
    /* select datas for updating */
    public function fillInputs($data){
        $this->nom = $data["nom"];
        $this->adresse = $data["adresse"];
        $this->ville_id = $data["ville_id"];
        $this->longi = $data["longi"];
        $this->lat = $data["lat"];
        /* if(!empty($data["pv"])){
            $this->pv = $data["pv"];
        }
        else $this->pv =[]; */
        $this->selectedID = $data["id"];
        /* dd($data["pv"]); */
    }

    /* updating record */
    public function update(){
        $validate = $this->validate([
            "nom" => 'required',
            "adresse" => 'required',
            "ville_id" => 'required',
            "longi" => 'nullable',
            "lat" => 'nullable',
            /* "pv" => 'nullprle', */
        ]);

        $record = magasin::find($this->selectedID);
        $record->update([
            "nom" => $this->nom,
            "adresse" => $this->adresse,
            "ville_id" => $this->ville_id,
            "longi" => $this->longi,
            "lat" => $this->lat,
            /* "pv" => $this->pv, */
        ]);
        session()->flash("message", "Modifications effectuées avec succès");
        $this->dispatchBrowserEvent("crud");
        $this->resetInputs();
        /* dd($this->pv); */
    }

    /* delete record */
    public function delete(){
        $this->validate(["selectedID" => "required"]);
        $record = magasin::find($this->selectedID);
        $record->delete($record);
        session()->flash("message", "Modifications effectuées avec succès");
        $this->dispatchBrowserEvent("crud");
    }
}
