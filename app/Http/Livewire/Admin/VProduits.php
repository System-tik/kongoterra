<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
/* appelle des models */
use App\Models\produit;
use App\Models\catp;
use ArrayObject;
/* Gestion des fichiers */
use Illuminate\Support\Facades\Storage;
use Livewire\WithFileUploads;
use PhpParser\Node\Expr\Cast\Array_;

class VProduits extends Component
{
    use WithFileUploads;

    /* Proprietes de la classe */
    public $nom;
    public $descrip;
    public $prix;
    public $catp_id;
    public $images = [];
    public $selectedID;
    public $galleries = [];
    public $photo;
    public $selectedGal;

    /* datas */
    public $produits;
    public $catagories;

    protected $listeners = ['crud'=>'$refresh'];
    
    public function render()
    {        
        $this->produits = produit::join('catps', 'catps.id', '=', 'produits.catp_id')->get(['produits.*', 'catps.lib']);
        $this->categories = catp::all();
        return view('livewire.admin.v-produits');
    }

    /* Reset inputs */
    public function resetInputs(){
        $this->nom = "";
        $this->descrip = "";
        $this->prix = "";
        $this->catp_id = "";
        $this->selectedID = "";
        $this->images = [];
        $this->galleries = [];
    }

    /* store data function */
    public function store(){
        try {
            $this->validate([

                'galleries.*' => 'image|max:5024', // 1MB Max
    
            ]);
            //code...
            $validate = $this->validate([
                "nom" => 'required',
                "descrip" => 'required',
                "prix" => 'required',
                "catp_id" => 'required',
                /* "images" => 'required' */
            ]);
    
            /* $this->validate([
                'galleries' => 'required'
            ]); */

    
            $record = produit::create($validate);

            
    
            /* Sauvegarde images */
            for ($i=0; $i < count($this->galleries); $i++) { 
                # code...
                $this->galleries[$i]->storePubliclyAs('public/produits/'.$record->id.'/', $i.'.png');
                $this->emitSelf('imgUpdate');
            }
            foreach (Storage::files('public/produits/'.$record->id) as $img){
    
                array_push($this->images, asset(str_replace('public', 'storage', $img)));
            }
            $record->update(['images'=>$this->images]);
            session()->flash("message", "Enregistrement effectué avec succès");
            $this->dispatchBrowserEvent("crud");
            $this->resetInputs();
            Storage::deleteDirectory('livewire-tmp');
        } catch (\Exception $ex) {
            //throw $th;
            dd($ex->getMessage());
        }
        
    }
    
    /* select datas for updating */
    public function fillInputs($data){
        $this->nom = $data["nom"];
        $this->descrip = $data["descrip"];
        $this->prix = $data["prix"];
        $this->catp_id = $data["catp_id"];
        $this->selectedID = $data["id"];
    }

    /* updating record */
    public function update(){
        $validate = $this->validate([
            "nom" => 'required',
            "descrip" => 'required',
            "prix" => 'required',
            "catp_id" => 'required',
        ]);

        $record = produit::find($this->selectedID);
        $record->update([
            "nom" => $this->nom,
            "descrip" => $this->descrip,
            "prix" => $this->prix,
            "catp_id" => $this->catp_id,
        ]);
        session()->flash("message", "Modifications effectuées avec succès");
        $this->dispatchBrowserEvent("crud");
    }

    /* delete record */
    public function delete(){
        $this->validate(["selectedID" => "required"]);
        $record = produit::find($this->selectedID);
        Storage::deleteDirectory('public/produits/'.$record->id);
        /* foreach (Storage::files('public/produits/'.$record->id) as $name){
            Storage::delete($name);
        } */
        $record->delete($record);
        session()->flash("message", "Modifications effectuées avec succès");
        $this->dispatchBrowserEvent("crud");
    }

    
    /* Gestion de la gallerie d'images */

    /* for editing gallerie images */
     public function edit($data){
        $this->selectedGal = $data;
        //dd($this->selectedGal);
    }

    public function updateImg(){
        $name = explode('/',$this->selectedGal)[3]; //recuperer le nom du fichier et son extension seulement dans le chemin
        $this->photo->storePubliclyAs('public/produits/'.$this->selectedID.'/', $name);
        $record = produit::find($this->selectedID);
        foreach (Storage::files('public/produits/'.$record->id) as $img){

            array_push($this->images, asset(str_replace('public', 'storage', $img)));
        }
        $record->update(['images'=>$this->images]);
        $this->resetInputs();
    }

    public function deleteImg(){
        $name = str_replace('storage', 'public', $this->selectedGal);
        //dd($name);
        Storage::delete($name);
    }

    public function addImg(){
        $b_files = Storage::files('public/produits/'.$this->selectedID);
        $imgs = new ArrayObject($this->galleries);
        $imgs = $imgs->getArrayCopy();
        //dd($imgs);
        if(count($b_files) == 0){
             /* Sauvegarde images */
            for ($i=0; $i < count($imgs); $i++) { 
                # code...
                $this->galleries[$i]->storePubliclyAs('public/produits/'.$this->selectedID.'/', $i.'.png');
                array_push($this->images, asset(str_replace('public', 'storage', Storage::files('public/produits/'.$this->selectedID)[$i])));
                //$this->emitSelf('imgUpdate');
            }
        }
       else{
            /* Recuperer le nom du dernier fichier tout en l'isolant de son extension, puis le convertir en int  */
            $last = intval(explode('.', explode('/', $b_files[count($b_files)-1])[3])[0]);
            
            for ($i=1; $i <= count($imgs); $i++) { 
                # code...
                $filename = $last + $i;  /* $last == 0 && $i == 0 ? 1 : ($last == 0 && $i != 0 ? $i + 1 : ($last != 0 && $i == 0 ? $last + 1 : $i + $last)); */
                /* 
                0,0=> 1
                0, !0 => $i+1
                !0, !0 => $i+last
                !0, 0=>$i+1
                */
                /* dd($last, $filename); */
                $this->galleries[$i-1]->storePubliclyAs('public/produits/'.$this->selectedID.'/', $filename.'.png');
                array_push($this->images, asset(str_replace('public', 'storage', Storage::files('public/produits/'.$this->selectedID)[$filename])));
                //$this->galleries[$i]->storePubliclyAs('public/gallerie/', $record->id.'.png');
                //$this->emitSelf('imgUpdate');
            }
       }
       $record = produit::find($this->selectedID);
        foreach (Storage::files('public/produits/'.$record->id) as $img){

            array_push($this->images, asset(str_replace('public', 'storage', $img)));
        }
        $record->update(['images'=>$this->images]);
        //$this->resetInputs();
    }
}
