<?php

namespace App\Http\Livewire\Admin;

use App\Models\actu;
use Exception;
use Livewire\Component;

class VActu extends Component
{
    public $titre;
    public $descrip;
    public $lien;
    public $source;
    public $actus;
    public $idUnique;
    public $idUnique1;
    public $idUnique2;

    protected $messages = [
        'titre.required' => 'Veuillez indiquer le titre.',
        'descrip.required' => 'Veuillez indiquer la description.',
        'lien.required' => 'Veuillez saisir le lien',
        'source.required' => 'Veuillez saisir la source',
        'idUnique1.required' => 'Veuillez seléctionner une actualité!',
        'idUnique2.required' => 'Veuillez seléctionner une actualité!'
    ];

    public function render()
    {
        $this->actus = actu::all();
        return view('livewire.admin.v-actu');
    }

    public function store()
    {
        //validation des données
        $validate = $this->validate([
            'titre' => 'required',
            'descrip' => 'required',
            'lien' => 'required',
            'source' => 'required'
        ]);
        try {
    
            //insertion de l'actualité
            $actu = actu::create($validate);
            $this->dispatchBrowserEvent('confirm',['message' => 'Actualité créée avec succès']);
            $this->emit('actualite');
            $this->clear();
            
        } catch (Exception $e) {
            $this->dispatchBrowserEvent('echec',['message' => $e->getMessage()]);
            $this->emit('actualite');
        }
    }

    public function clear()
    {
        $this->titre = "";
        $this->descrip = "";
        $this->lien = "";
        $this->source = "";
    }

    public function fillInputs($donnee)
    {
        //recupération des données d'une actualité
        $this->titre = $donnee['titre'];
        $this->descrip = $donnee['descrip'];
        $this->lien = $donnee['lien'];
        $this->source = $donnee['source'];
        $this->idUnique = $donnee['id'];
        $this->idUnique1 = $donnee['id'];
        $this->idUnique2 = $donnee['id'];
    }

    public function update()
    {
        //vérifier si une actualité est séléctionnée
        $valide = $this->validate([
            'idUnique1' => 'required'
        ]);
        //validation des données
        $validate = $this->validate([
            'titre' => 'required',
            'descrip' => 'required',
            'lien' => 'required',
            'source' => 'required',
        ]);
        try {

            //recupération de l'actualité
            $actu = actu::find($this->idUnique);
            $actu->update($validate);
            $this->dispatchBrowserEvent('confirm',['message' => 'Actualité modifiée avec succès']);
            $this->emit('actualite');
            $this->clear();
            
        } catch (Exception $e) {
            $this->dispatchBrowserEvent('echec',['message' => $e->getMessage()]);
            $this->emit('actualite');
        }

    }

    public function delete()
    {
        //vérifier si une actualité a été séléctionnée
        $validate = $this->validate([
            'idUnique2' => 'required'
        ]);

        try {
            //recupération de l'actualité à supprimer
            $actu = actu::find($this->idUnique);
            //suppression de l'actualité
            $actu->delete();
            $this->dispatchBrowserEvent('confirm',['message' => 'Actualité supprimée avec succès']);
            $this->emit('actualite');
            $this->clear();
            
        } catch (Exception $e) {
            $this->dispatchBrowserEvent('echec',['message' => $e->getMessage()]);
            $this->emit('actualite');
        }
    }
}
