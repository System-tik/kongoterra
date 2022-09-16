<?php

namespace App\Http\Livewire\Admin;

use App\Models\actu;
use Exception;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;

class VActu extends Component
{
    use WithFileUploads;
    public $titre;
    public $descrip;
    public $lien;
    public $source;
    public $actus;
    public $selectedID;
    public $photo;

    protected $messages = [
        'titre.required' => 'Veuillez indiquer le titre.',
        'descrip.required' => 'Veuillez indiquer la description.',
        'lien.nullable' => 'Veuillez saisir le lien',
        'source.required' => 'Veuillez saisir la source',
        'selectedID.required' => 'Veuillez seléctionner une actualité!',
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
            'lien' => 'nullable',
            'source' => 'required'
        ]);
        try {
    
            //insertion de l'actualité
            $record = actu::create($validate);
            $this->photo->storePubliclyAs('public/actus', $record->id.'.png');
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
        $this->selectedID = $donnee['id'];
    }

    public function update()
    {
        //vérifier si une actualité est séléctionnée
        $valide = $this->validate([
            'selectedID' => 'required'
        ]);
        //validation des données
        $validate = $this->validate([
            'titre' => 'required',
            'descrip' => 'required',
            'lien' => 'nullable',
            'source' => 'required',
        ]);
        try {
            //recupération de l'actualité
            $record = actu::find($this->selectedID);
            $record->update($validate);
            if(!empty($this->photo)){
                $this->photo->storePubliclyAs('public/actus', $record->id.'.png');
            }
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
            'selectedID' => 'required'
        ]);

        try {
            //recupération de l'actualité à supprimer
            $actu = actu::find($this->selectedID);
            //suppression de l'actualité
            $name =  str_replace('storage', 'public', Storage::url('public/actus/'.$this->selectedID.'.png'));
            Storage::delete($name);
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
