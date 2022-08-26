<?php

namespace App\Http\Controllers;

use App\Models\about;
use App\Models\commande;
use App\Models\magasin;
use App\Models\produit;
use App\Models\service;
use App\Models\shoppingcart;
use App\Models\temoignage;
use Exception;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function index()
    {
        
        try {
            $produits = produit::all();
            $abouts = about::all();
            $services = service::all();
            $temoignages = temoignage::all();
            $magasins = magasin::all();
            $commandes =  commande::all();
            

            return response()->json([
                'produits' => $produits,
                'abouts' => $abouts,
                'services' => $services,
                'temoignages' => $temoignages,
                'magasins' => $magasins,
                'commandes' => $commandes
            ]);

        } catch (Exception $e) {
            return response()->json(['message' => $e->getMessage()]);
        }
    }
  
   
}
