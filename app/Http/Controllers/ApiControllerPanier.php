<?php

namespace App\Http\Controllers;

use App\Models\shoppingcart;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ApiControllerPanier extends Controller
{
    public function register(Request $request)
    {
        
        try {
            //validation des éléments request
            $rules = [
                'client_id' => 'required',
                'produits' => 'required',
                'etat' => 'required'
            ];
            $validate = Validator::make($request->all(), $rules);
            if($validate->fails()){
                return response()->json($validate->errors(), 400);
            }
            //creation d'un panier
            $reque = shoppingcart::create([
                'client_id' => $request->client_id,
                'produits' => $request->produits,
                'etat' => $request->etat
            ]);
            return response()->json(['panier' => $reque], 200);
        } catch (Exception $e) {
            return response()->json(['message' => $e->getMessage()], 400);
        }
    }

    public function update(Request $request, $id)
    {
        try {
            //validation des éléments request
            $rules = [
                'produits' => 'required',
                'etat' => 'required'
            ];
            $validate = Validator::make($request->all(), $rules);
            if($validate->fails()){
                return response()->json($validate->errors(), 400);
            }
            //modification du panier
            shoppingcart::findOrfail($id)->update([
                'produits' => $request->produits,
                'etat' => $request->etat
            ]);
            return response()->json(['message' => 'Modification effectuée'], 200);
            
        } catch (Exception $e) {
            return response()->json(['message' => $e->getMessage()], 400);
        }
    }

    public function delete(Request $request, $id)
    {
        try {
            //suppression du panier
            shoppingcart::findOrfail($id)->delete();
            return response()->json(['message' => 'Suppression effectuée'], 200);
        } catch (Exception $e) {
            return response()->json(['message' => $e->getMessage()], 400);
        }
    }

}
