<?php

namespace App\Http\Controllers;

use App\Models\client;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class ApiControllerClient extends Controller
{
    public function store(Request $request)
    {
        
        try {
            //validation des éléments request
            $rules = [
                'noms' => 'required',
                'tel' => 'required',
                'email' => 'required',
                'mdp' => 'required'
            ];
            $validate = Validator::make($request->all(), $rules);
            if($validate->fails()){
                return response()->json($validate->errors(), 400);
            }
            //creation d'un client
            $reque = client::create([
                'noms' => $request->noms,
                'tel' => $request->tel,
                'email' => $request->email,
                'mdp' => Hash::make($request->mdp) 
            ]);

            return response()->json(['user' => $reque], 200);
        } catch (Exception $e) {
            return response()->json($e->getMessage(), 400);
        }
    }

    public function update(Request $request, $id)
    {
        try {
            //validation des éléments request
            $rules = [
                'noms' => 'required',
                'tel' => 'required',
                'email' => 'required',
                'mdp' => 'required'
            ];
            $validate = Validator::make($request->all(), $rules);
            if($validate->fails()){
                return response()->json($validate->errors(), 400);
            }
            //modification du client
            client::findOrfail($id)->update([
                'noms' => $request->noms,
                'tel' => $request->tel,
                'email' => $request->email,
                'mdp' => $request->mdp
            ]);
            return response()->json(['message' => 'Modification effectuée'], 200);
            
        } catch (Exception $e) {
            return response()->json(['message' => 'Une erreur est survenue'], 400);
        }
    }

    public function delete(Request $request, $id)
    {
        try {
            //suppression du client
            client::findOrfail($id)->delete();
            return response()->json(['message' => 'Suppression effectuée'], 200);
        } catch (Exception $e) {
            return response()->json(['message' => 'Une erreur est survenue'], 400);
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

