<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class service extends Model
{
    use HasFactory;
    protected $fillable = ["nom", "descrip","sous"];
    protected $casts = [
        'sous' => 'array',
    ];
}
