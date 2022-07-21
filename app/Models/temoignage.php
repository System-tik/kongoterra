<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class temoignage extends Model
{
    use HasFactory;
    protected $fillable = [
        "contenu", 
        "lien", 
        "nom", 
        "preno", 
        "adresse", 
        "pays", 
        "email", 
        "tel", 
        "age", 
        "sexe", 
        "enceinte", 
        "maladie", 
        "methode", 
        "signe", 
        "center_ttt", 
        "prescripteur", 
        "type_prescri", 
        "jour_t", 
        "mois_t", 
        "an_t", 
        "ttt", 
        "type_ttt", 
        "dosage", 
        "mode_prepar", 
        "nb_prise",
        "nb_jour",
        "evolu_temp",
        "evolu_paras",
        "effe_ind",
        "rechute",
        "date_rechute",
        "dep_res",
        "remarque"
    ];

    protected $casts = [
        "signe",
        "evolu_temp",
        "evolu_paras",
        "effet_ind"
    ];
}
