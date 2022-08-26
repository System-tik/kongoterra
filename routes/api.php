<?php

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
//Route all get
Route::get('/',[ApiController::class,'index']);

//Routes panier
Route::post('/panier/store/{token}',[ApiControllerPanier::class,'store'])->name('panier/store');
Route::put('/panier/update/{id}',[ApiControllerPanier::class,'update']);
Route::delete('/panier/delete/{id}',[ApiControllerPanier::class,'delete']);

//Routes client
Route::post('/client/store',[ApiControllerClient::class,'store'])->name('client/store');
Route::put('/client/update/{id}',[ApiControllerClient::class,'update']);
Route::post('/client/login',[ApiControllerClient::class,'login']);

//Routes commande
Route::post('/commande/store',[ApiControllerCom::class,'store']);
Route::put('/commande/update/{id}',[ApiControllerCom::class,'update']);


