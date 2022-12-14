<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ApiController;
use App\Http\Controllers\ApiControllerClient;
use App\Http\Controllers\ApiControllerCom;
use App\Http\Controllers\ApiControllerPanier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//api authcontroller
Route::post('/auth/create/{mdp}', [AuthController::class,'user']);

//Route all get
Route::get('/',[ApiController::class,'prod'])->middleware('auth:sanctum');
Route::get('/tems',[ApiController::class,'tem'])->middleware('auth:sanctum');
Route::get('/services',[ApiController::class,'serv'])->middleware('auth:sanctum');
Route::get('/magasins',[ApiController::class,'mag'])->middleware('auth:sanctum');
Route::get('/abouts',[ApiController::class,'ab'])->middleware('auth:sanctum');

//Routes panier
Route::post('/panier/store',[ApiControllerPanier::class,'register'])->name('panier/store');
Route::put('/panier/update/{id}',[ApiControllerPanier::class,'update'])->middleware('auth:sanctum');
Route::delete('/panier/delete/{id}',[ApiControllerPanier::class,'delete'])->middleware('auth:sanctum');

//Routes client
Route::post('/auth/client/store',[ApiControllerClient::class,'store'])->middleware('auth:sanctum');
Route::put('/client/update/{id}',[ApiControllerClient::class,'update'])->middleware('auth:sanctum');
Route::post('/client/login',[ApiControllerClient::class,'login'])->middleware('auth:sanctum');

//Routes commande
Route::post('/commande/store',[ApiControllerCom::class,'store'])->middleware('auth:sanctum');
Route::put('/commande/update/{id}',[ApiControllerCom::class,'update'])->middleware('auth:sanctum');


