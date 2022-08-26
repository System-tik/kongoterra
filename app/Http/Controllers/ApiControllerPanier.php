<?php

namespace App\Http\Controllers;

use App\Models\shoppingcart;
use Exception;
use Illuminate\Http\Request;

class ApiControllerPanier extends Controller
{
    public function store(Request $request)
    {
        
        try {
            //validation des éléments request
            $validate = $request->validate([
                'client_id' => 'required',
                'produits' => 'required',
                'etat' => 'required'
            ]);
            //creation d'un panier
            $reque = shoppingcart::create($validate);
            return response()->json(['panier' => $reque]);
        } catch (Exception $e) {
            return response()->json(['message' => $e->getMessage()]);
        }
    }

    public function update(Request $request, $id)
    {
        try {
            //validation des éléments request
            $validate = $request->validate([
                'produits' => 'required',
                'etat' => 'required',
            ]);
            //modification du panier
            shoppingcart::find($id)->update($validate);
            return response()->json(['message' => 'Modification effectuée']);
            
        } catch (Exception $e) {
            return response()->json(['message' => $e->getMessage()]);
        }
    }

    public function delete(Request $request, $id)
    {
        try {
            //suppression du panier
            shoppingcart::find($id)->delete();
            return response()->json(['message' => 'Suppression effectuée']);
        } catch (Exception $e) {
            return response()->json(['message' => $e->getMessage()]);
        }
    }

}
