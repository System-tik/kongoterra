<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class magasin extends Model
{
    use HasFactory;
    protected $fillable = ["nom", "ville_id", "adresse", /* "pv", */ "longi", "lat"];
    /* protected $casts = ["pv" => "array"]; */
}
