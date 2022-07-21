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

    
    public function render()
    {
        return view('livewire.component.c-log');
    }

    public function inscrire(){
        $validate = $this->validate([
            'noms'=>'required',
            "tel"=>'required',
            "mdp"=>'required',
            "email"=>['required', "email"]
        ]);
        $record = client::create($validate);
        session()->put('client', $record);
        $this->emit('reRenderParent');
        $this->dispatchBrowserEvent("logSuccess");
        //dd($validate);
    }

    public function connecter(){
        $validate = $this->validate([
            "tel"=>'required',
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

