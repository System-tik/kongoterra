<?php

namespace App\Http\Controllers;

use App\Models\commande;
use Exception;
use Illuminate\Http\Request;

class ApiControllerCom extends Controller
{
    public function store(Request $request)
    {
        try {
            //validation des éléments request
            $validate = $request->validate([
                'mag_id' => 'required',
                'panier_id' => 'required',
                'etat' => 'required'
            ]);
            //creation de la commande
            $reque = commande::create($validate);
            return response()->json(['commande' => $reque]);
        } catch (Exception $e) {
            return response()->json($e->getMessage());
        }
    }

    public function update(Request $request, $id)
    {
        try {
            //validation des éléments request
            $validate = $request->validate([
                'mag_id' => 'required',
                'panier_id' => 'required',
                'etat' => 'required',
            ]);
            //modification du panier
            commande::find($id)->update($validate);
            return response()->json(['message' => 'Modification effectuée']);
            
        } catch (Exception $e) {
            return response()->json(['message' => $e->getMessage()]);
        }
    }

    public function delete(Request $request, $id)
    {
        try {
            //suppression du panier
            commande::find($id)->delete();
            return response()->json(['message' => 'Suppression effectuée']);
        } catch (Exception $e) {
            return response()->json(['message' => $e->getMessage()]);
        }
    }

}