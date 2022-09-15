<?php

namespace App\Http\Livewire\Component;

use Livewire\Component;
use App\Models\client;
use Exception;

class CLog extends Component
{
    public $noms;
    public $tel;
    public $mdp;
    public $email;
    public $clients;
    public $_client;    
    protected $listeners = ['reRenderParent'];

    protected $messages = [
        'noms.required' => 'Veuillez renseigner le nom.',
        'noms.min' => 'le nom doit contenir plus de 4 caractères.',
        'noms.max' => 'le nom ne doit contenir plus de 50 caractères.',

        'tel.required' => 'Veuillez saisir le numéro.',
        'tel.min' => 'Veuillez vérifier que le numéro est valide.',
        'tel.max' => 'Veuillez vérifier que le numéro est valide.',
        'tel.integer' => 'le numéro de téléphone est invalide.',
        
        'email.email' => 'Adresse email incorrecte.',
        'email.required' => 'Veuillez saisir l\'addresse email.',
        'email.unique' => 'adresse email déjà existant',
        'mdp.required' => 'Veuiller saisir le mot de passe.'

    ];
    
    public function render()
    {
        return view('livewire.component.c-log');
    }

    public function inscrire(){

        $user = client::where('tel', $this->tel)->orWhere('email', $this->email)->first();

        $validate = $this->validate([
            'noms'=>'required|min:4|max:50',
            "tel"=>[
                'required',
                'min:10',
                'max:14',
                'unique:clients',
            ],
            "mdp"=>'required',
            "email"=>[
                'email',
                'required',
                'unique:clients'
                ]

        ]);
        try {
            $client_exist = client::where('tel', $this->tel)->orWhere('email', $this->email)->first();
            if($client_exist === null){

                $record = client::create($validate);
                session()->put('client', $record);
                $this->emit('reRenderParent');
                $this->dispatchBrowserEvent("confirm", ['message' => 'compte crée avec succès!']);
                $this->resetFields();
            }

            else{
                $this->dispatchBrowserEvent('echec',['message' => 'email ou numéro de téléphone déjà existant!']);
                //$this->addError('email','email');
                //$this->addError('tel','tel');
            }
        } catch (Exception $e) {
            $this->dispatchBrowserEvent("echec",['message' => $e->getMessage()]);
        }
    }

    public function connecter(){

        $validate = $this->validate([
            "tel"=>'required|min:10|max:14',
            "mdp"=>'required',
        ]);
        try {
            $record = client::where([['tel',$this->tel], ['mdp', $this->mdp]])->first();
            if($record !== null){
                session()->put('client', $record);
                $this->emit('reRenderParent');
                $this->dispatchBrowserEvent("confirm", ['message' => 'connexion réussie!']);
                $this->resetFields();
            }
            else{
                $this->dispatchBrowserEvent("echec", ['message' => 'numéro ou mot de passe incorrecte']);
                
            }
            
        } catch (Exception $e) {
            $this->dispatchBrowserEvent("echec",['message' => $e->getMessage()]);
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

