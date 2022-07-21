<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\header;

class VHeader extends Component
{
    public $text;
    public $headers;

    public function render()
    {
        $this->headers = header::all();
        return view('livewire.admin.v-header');
    }
    /* Reset inputs */
     public function resetInputs(){
        $this->text = "";
        $this->selectedID = "";
    }

    /* store data function */
    public function store(){
        $validate = $this->validate([
            "text" => 'required',
        ]);

        header::create($validate);
        session()->flash("message", "Enregistrement effectué avec succès");
        $this->dispatchBrowserEvent("crud");
        $this->resetInputs();
    }
    
    /* select datas for updating */
    public function fillInputs($data){
        $this->text = $data["text"];
        $this->selectedID = $data["id"];
    }

    /* updating record */
    public function update(){
        $validate = $this->validate([
            "text" => 'required',
        ]);

        $record = header::find($this->selectedID);
        $record->update([
            "text" => $this->text,
        ]);
        session()->flash("message", "Modifications effectuées avec succès");
        $this->dispatchBrowserEvent("crud");
    }

    /* delete record */
    public function delete(){
        $this->validate(["selectedID" => "required"]);
        $record = header::find($this->selectedID);
        $record->delete($record);
        session()->flash("message", "Modifications effectuées avec succès");
        $this->dispatchBrowserEvent("crud");
    }
}
