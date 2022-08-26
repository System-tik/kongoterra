<?php

namespace App\Http\Controllers;

use App\Models\client;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ApiControllerClient extends Controller
{
    public function store(Request $request)
    {
        
        try {
            //validation des éléments request
            $validate = $request->validate([
                'noms' => 'required',
                'tel' => 'required',
                'email' => 'required',
                'mdp' => 'required'
            ]);
            //creation d'un client
            $reque = client::create([
                'noms' => $request->noms,
                'tel' => $request->tel,
                'email' => $request->email,
                'mdp' => Hash::make($request->mdp) 
            ]);
            return response()->json(['user' => $reque]);
        } catch (Exception $e) {
            return response()->json($e->getMessage());
        }
    }

    public function update(Request $request, $id)
    {
        try {
            //validation des éléments request
            $validate = $request->validate([
                'noms' => 'required',
                'tel' => 'required',
                'email' => 'required',
                'mdp' => 'required'
            ]);
            //modification du client
            client::find($id)->update($validate);
            return response()->json(['message' => 'Modification effectuée']);
            
        } catch (Exception $e) {
            return response()->json(['message' => 'Une erreur est survenue']);
        }
    }

    public function delete(Request $request, $id)
    {
        try {
            //suppression du client
            client::find($id)->delete();
            return response()->json(['message' => 'Suppression effectuée']);
        } catch (Exception $e) {
            return response()->json(['message' => 'Une erreur est survenue']);
        }
    }

    public function login(Request $request)
    {
        try {
                $user = client::where('email',$request->email)->first();
                if(Hash::check($request->mdp, $user->mdp)){
                    return response()->json($user);
                } else {
                return response()->json(['message' => 'Echec de la connexion']);
            }
        } catch (Exception $e) {
            return response()->json(['message' => $e->getMessage()]);
        }
    }
}
