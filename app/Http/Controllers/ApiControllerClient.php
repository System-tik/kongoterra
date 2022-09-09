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
                'noms' => 'required|min:3|max:14',
                'tel' => 'required|min:10|max:14',
                'email' => 'required|email',
                'mdp' => 'required'
            ];
            $validate = Validator::make($request->all(), $rules);
            if($validate->fails()){
                return response()->json($validate->errors(), 400);
            }
            $client_exist = client::where('tel', $request->tel)->orWhere('email', $request->email)->first();
            if($client_exist === null){
                $reque = client::create([
                    'noms' => $request->noms,
                    'tel' => $request->tel,
                    'email' => $request->email,
                    'mdp' => Hash::make($request->mdp) 
                ]);
                return response()->json($reque, 200);
            }
            return response()->json(["message" => "duplicate"], 400);
            //creation d'un client
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
                'tel' => 'required|min:10|max:14',
                'email' => 'required|email',
                'mdp' => 'required|min:3|max:25'
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
                $user = client::where('tel',$request->tel)->first();
                if(Hash::check($request->mdp, $user->mdp)){
                    return response()->json($user, 200);
                } else {
                return response()->json(['message' => 'Echec de la connexion'], 400);
            }
        } catch (Exception $e) {
            return response()->json(['message' => $e->getMessage()], 400);
        }
    }
}

