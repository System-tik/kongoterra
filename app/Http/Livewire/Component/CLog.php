<?php

namespace App\Http\Livewire\Component;

use Livewire\Component;
use App\Models\client;

class CLog extends Component
{
    public $noms;
    public $tel;
    public $mdp;
    public $email;
    public $clients;
    protected $listeners = ['reRenderParent'];

    protected $messages = [
        'noms.required' => 'Veuillez rensigner le nom.',
        'noms.min' => 'le nom doit contenir plus de 4 caractères.',
        'noms.max' => 'le nom ne doit contenir plus de 25 caractères.',

        'tel.required' => 'Veuillez saisir le numéro.',
        'tel.min' => 'Veuillez vérifier que le numéro est valide.',
        'tel.max' => 'Veuillez vérifier que le numéro est valide.',
        
        'email.email' => 'Adresse email incorrecte.',
        'email.required' => 'Veuillez saisir l\'addresse email.',
        'mdp.required' => 'Veuiller saisir le mot de passe.'

    ];
    
    public function render()
    {
        return view('livewire.component.c-log');
    }

    public function inscrire(){
        $validate = $this->validate([
            'noms'=>'required|min:4|max:25',
            "tel"=>'required|min:10|max:14',
            "mdp"=>'required',
            "email"=>'required|email'
        ]);
        $record = client::create($validate);
        session()->put('client', $record);
        $this->emit('reRenderParent');
        $this->dispatchBrowserEvent("logSuccess");
        //dd($validate);
    }

    public function connecter(){
        $validate = $this->validate([
            "tel"=>'required|min:10|max:14',
            "mdp"=>'required',
        ]);
        $record = client::where([['tel',$this->tel], ['mdp', $this->mdp]])->first();
        if($record !== null){
            session()->put('client', $record);
            $this->emit('reRenderParent');
            $this->dispatchBrowserEvent("logSuccess");
        }
        else{
            $this->dispatchBrowserEvent("logError");
        }
        
    }

    public function resetFields(){
        $this->noms = "";
        $this->tel = "";
        $this->mdp = "";
        $this->email = "";
    }
    public function reRenderParent()
    {
        $this->mount();
        $this->render();
    }
}

