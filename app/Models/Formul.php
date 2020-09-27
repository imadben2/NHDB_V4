<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Formul extends Model
{
    protected $fillable = [
        'nom_formules', 'espace_disque', 'espace_unite','type', 'nombre_mail', 'prix'
    ];
}
