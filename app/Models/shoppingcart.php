<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class shoppingcart extends Model
{
    use HasFactory;
    protected $fillable = ["client_id", "produits", "etat"];
    protected $casts = ["produits" => "array"];
}
