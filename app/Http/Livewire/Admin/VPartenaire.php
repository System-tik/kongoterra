<?php

namespace App\Http\Livewire\Admin;

use App\Models\Partenaire;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;

class VPartenaire extends Component
{
    use WithFileUploads;

    public $nom;
    public $url;
    public $selectedId;
    public $partenaires;
    public $logo;

    protected $messages = [
        'nom.required' => 'Veuillez saisir le nom',
        'url.required' => 'Veuillez saisir l\'url',
        'logo.required' => 'Veuillez séléctionner le logog',
        'selectedId.required' => 'Veuillez Séléctionner un partenaire.' 
    ];

    public function render()
    {
        $this->partenaires = Partenaire::all();
        return view('livewire.admin.v-partenaire');
    }

    public function store()
    {

        $validate = $this->validate([
            'nom' => 'required',
            'url' => 'required',
            'logo' => 'required'
        ]);

        try {
            //enregistrement de parténaire
            $record = Partenaire::create($validate);
            $this->logo->storePubliclyAs('public/partenaires', $record->id.'.png');
            $this->dispatchBrowserEvent('confirm',['message' => 'Parteanire créée avec succès']);
            $this->emit('partenaire');
            $this->clear();
        } catch (\Throwable $th) {
            $this->dispatchBrowserEvent('echec',['message' => $th->getMessage()]);
            $this->emit('partenaire');
        }
    }

    public function update()
    {
        $validate_crud = $this->validate([
            'selectedId' => 'required'
        ]);

        $validate = $this->validate([
            'nom' => 'required',
            'url' => 'required',
        ]);

        try {
            $partenaire = Partenaire::find($this->selectedId);
            //enregistrement de parténaire
            $partenaire->update($validate);
            if(!empty($this->logo)){
                $this->logo->storePubliclyAs('public/partenaires', $partenaire->id.'.png');
            }

            $this->dispatchBrowserEvent('confirm',['message' => 'Parteanire créée avec succès']);
            $this->emit('partenaire');
            $this->clear();
        } catch (\Throwable $th) {
            $this->dispatchBrowserEvent('echec',['message' => $th->getMessage()]);
            $this->emit('partenaire');
        }

    }

    public function delete()
    {
        $validate_crud = $this->validate([
            'selectedId' => 'required'
        ]);
        
        try {
            $partenaire = Partenaire::find($this->selectedId);

            $name =  str_replace('storage', 'partenaires', Storage::url('public/partenaires/'.$this->selectedId.'.png'));
            Storage::delete($name);

            //enregistrement de parténaire
            $partenaire->delete();
            $this->dispatchBrowserEvent('confirm',['message' => 'Parteanire créée avec succès']);
            $this->emit('partenaire');
            $this->clear();
        } catch (\Throwable $th) {
            $this->dispatchBrowserEvent('echec',['message' => $th->getMessage()]);
            $this->emit('partenaire');
        }

    }

    public function clear()
    {
        $this->nom = "";
        $this->url = "";
        $this->selectedId = "";
    }

    public function select($data)
    {
        $this->nom = $data['nom'];
        $this->url = $data['url'];
        $this->selectedId = $data['id'];
    }
}
