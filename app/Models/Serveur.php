<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Serveur extends Model
{

    protected $fillable = [
        'nom_serveur', 'numero'
    ];
}
