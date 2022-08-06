<?php

namespace App\Http\Livewire\Client;

use Livewire\Component;
use App\Models\temoignage;
use Illuminate\Support\Facades\Storage;
use Livewire\WithFileUploads;

class VTemoignage extends Component
{
    use WithFileUploads;
    public $contenu;
    public $lien;
    public $nom;
    public $prenom;
    public $adresse;
    public $pays;
    public $email;
    public $tel;
    public $age;
    public $sexe = "H";
    public $enceinte = 1;
    public $maladie;
    public $methode;
    public $signe = [];
    public $center_ttt;
    public $prescripteur;
    public $type_prescri;
    public $date_t;
    public $ttt;
    public $type_ttt;
    public $dosage;
    public $mode_prepar;
    public $nb_prise;
    public $nb_jour;
    public $evolu_temp = ["", "", "", "", "", "", ""];
    public $evolu_paras = ["", "", "", "", "", "", ""];
    public $photo;
    //public $ev_p = ["1", "3", "5", "7", "14", "28", "42"];
    public $effet_ind = [];
    public $rechute;
    public $date_rechute;
    public $dep_res;
    public $remarque;

    public $remoignages;
    

    public $signes = [
        "Altération de la conscience", "Anoxerie", "Arthralgies", "Asthénie", "Céphalées", "Convulsions",
        "Courbatures", "Diarrhé", "Douleurs abdominales", "Eruption cutanée", "Fièvre", "Frissons",
        "Hépathomégalie", "Nausée", "Pâleur", "Splénomégalie", "Toux", "Vomissements"
    ];

    public $effets = [
        "Nausée", "Hypoglycémie", "Prurit", "Vertige", "Problème de menstruation", 
        "Diarrhé", "Insomnie", "Somnolence", "Vomissements", "Asthénie",
        "Douleurs abdominales", "Toux grasse", "Céphalées", "Autres"
    ];

    public $ttts = ["Tisane", "Poudre", "Plante fraiche", "Autre"];

    public $cols1 = [0,6,12];

    public $autres = false;
    /* public $ev_temp = ["", "", "", "", "", "", ""];
    public $ev_paras = ["", "", "", "", "", "", ""]; */

    public function render()
    {
        $this->temoignages = temoignage::all();
        return view('livewire.client.v-temoignage', ['ev_p'=>["1", "3", "5", "7", "14", "28", "42"]]);
    }

    public function changer($data){
        if ($data == 'Autre'){
            $this->autres = true;
        }
        else{
            $this->autres = false;
        }
    }

    public function store()
    {
        $validate = $this->validate([
            "contenu"=>'required', 
            "lien"=>'nullable', 
            "nom"=>'required', 
            "prenom"=>'required', 
            "adresse"=>'required', 
            "pays"=>'required', 
            "email"=>'nullable', 
            "tel"=>'required', 
            "age"=>'required', 
            "sexe"=>'required', 
            "enceinte"=>'required', 
            "maladie"=>'required', 
            "methode"=>'required', 
            "signe"=>'required', 
            "center_ttt"=>'required', 
            "prescripteur"=>'required', 
            "type_prescri"=>'required', 
            "date_t"=>'required', 
            "ttt"=>'required', 
            "type_ttt"=>'required', 
            "dosage"=>'required', 
            "mode_prepar"=>'required', 
            "nb_prise"=>'required',
            "nb_jour"=>'required',
            "evolu_temp"=>'nullable',
            "evolu_paras"=>'nullable',
            "effet_ind"=>'nullable',
            "rechute"=>'required',
            "date_rechute"=>'nullable',
            "dep_res"=>'nullable',
            "remarque"=>'nullable'
        ]);
        
        if(strpos($this->lien, "https://") !== false){
            $this->lien = explode("https://", $this->lien);
        }
        

        ///dd($validate);
        $record = temoignage::create($validate);
        if(!empty($this->photo)){
            $this->photo->storePubliclyAs('public/temoignages/', $record->id.'.png');
        }
        $this->dispatchBrowserEvent("temoignage");
    }

}
