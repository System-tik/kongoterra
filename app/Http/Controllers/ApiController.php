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
    public function prod()
    {
        
        try {
            $produits = produit::all();           
            return response()->json($produits);

        } catch (Exception $e) {
            return response()->json(['message' => $e->getMessage()]);
        }
    }

    public function tem()
    {
        
        try {
            $temoignages = temoignage::all();
           
            return response()->json($temoignages);

        } catch (Exception $e) {
            return response()->json(['message' => $e->getMessage()]);
        }
    }

    public function serv()
    {
        
        try {
            $services = service::all();           
            return response()->json($services);

        } catch (Exception $e) {
            return response()->json(['message' => $e->getMessage()]);
        }
    }

    public function mag()
    {
        
        try {
            $magasins = magasin::all();
            return response()->json($magasins);

        } catch (Exception $e) {
            return response()->json(['message' => $e->getMessage()]);
        }
    }
    public function ab()
    {
        
        try {
            $abouts = about::all();            

            return response()->json($abouts);

        } catch (Exception $e) {
            return response()->json(['message' => $e->getMessage()]);
        }
    }
}
