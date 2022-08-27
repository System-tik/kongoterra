<?php

namespace App\Http\Controllers;

use App\Models\commande;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ApiControllerCom extends Controller
{
    public function store(Request $request)
    {
        try {
             //validation des éléments request
             $rules = [
                'mag_id' => 'required',
                'panier_id' => 'required',
                'etat' => 'required'
            ];
            $validate = Validator::make($request->all(), $rules);
            if($validate->fails()){
                return response()->json($validate->errors(), 400);
            }
            //creation de la commande
            $reque = commande::create([
                'mag_id' => $request->mag_id,
                'panier_id' => $request->panier_id,
                'etat' => $request->etat
            ]);
            return response()->json(['commande' => $reque], 200);
        } catch (Exception $e) {
            return response()->json($e->getMessage(), 400);
        }
    }

    public function update(Request $request, $id)
    {
        try {
            //validation des éléments request
            $rules = [
                'mag_id' => 'required',
                'panier_id' => 'required',
                'etat' => 'required'
            ];
            $validate = Validator::make($request->all(), $rules);
            if($validate->fails()){
                return response()->json($validate->errors(), 400);
            }
            //modification du panier
            commande::findOrfail($id)->update($validate);
            return response()->json(['message' => 'Modification effectuée'], 200);
            
        } catch (Exception $e) {
            return response()->json(['message' => $e->getMessage()], 400);
        }
    }

    public function delete(Request $request, $id)
    {
        try {
            //suppression du panier
            commande::findOrfail($id)->delete();
            return response()->json(['message' => 'Suppression effectuée'], 200);
        } catch (Exception $e) {
            return response()->json(['message' => $e->getMessage()], 400);
        }
    }

}