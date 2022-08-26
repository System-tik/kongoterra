<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Config;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('pages.home');
})->name("welcome");

Route::get('/about/{id}', function ($id) {
    return view('pages.about', ['id'=>$id]);
})->name("about");

Route::get('/point-vente', function () {
    return view('pages.magasins');
})->name("pv");

Route::get('/actualite', function () {
    return view('pages.actu');
})->name("actu");

Route::get('/produits', function () {
    return view('pages.produits');
})->name("prod");
Route::get('/detail/{id}', function ($id) {
    return view('pages.detail_produit', ['id'=>$id]);
})->name("detail");
Route::get('/commader', function () {
    return view('pages.commader');
})->name("commander");
Route::get('/temoignages', function () {
    return view('pages.temoignage');
})->name("tem");



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        /* $menu = [1,2,3,4,5,6,7]; */
        return view('dashboard', ["menus"=>Config::get("constantes.admin.menu")]);
    })->name('dashboard');
});

/* Route::get('/send',function (){
    return view('form');
}); */