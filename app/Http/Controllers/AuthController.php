<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
        /**
     * @param Request $request
     * @return User
     */

    public function user(Request $request)
    {
        try {
            //code...
            $validate = Validator::make($request->all(),
            [
                'name' => 'required',
                'email' => 'required|email',
                'password' => 'required'
            ]);
    
            if($validate->fails())
            {
                return response()->json([
                    'status' => false,
                    'message' => 'Validation error',
                    'erreur' => $validate->errors
                ], 401);
            }

            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password)
            ]);

            return response()->json([
                'status' => true,
                'message' => 'Utilisateur crée avec succès',
                'token' => $user->createToken("API TOKEN")->plainTextToken
            ], 200);
        } catch (\Throwable $th) {
            return response()->json([
                'status' => false,
                'message' => $th->getMessage()
            ], 500);
        }
    }

    public function login(Request $request)
    {
        try {
            //code...
            $validate = Validator::make($request->all(),
            [
                'email' => 'required|email',
                'password' => 'required'
            ]);
    
            if($validate->fails())
            {
                return response()->json([
                    'status' => false,
                    'message' => 'Validation error',
                    'erreur' => $validate->errors
                ], 401);
            }

            if (!Auth::attempt($request->only(['email','password']))) {
                return response()->json([
                    'status' => false,
                    'message' => 'email or password not correct'
                ], 401);
            }
            
            $user = User::where('email', $request->email)->first();

            return response()->json([
                'status' => true,
                'user' => $user,
                'token'
            ], 200);
        } catch (\Throwable $th) {
            return response()->json([
                'status' => false,
                'message' => $th->getMessage()
            ], 500);
        }
    }

}
