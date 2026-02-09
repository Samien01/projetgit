<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Formation extends Model
{
    //
    protected $fillable = [
        'titre_module',
        'domaine',
        'date_formation',
        'mois',
        'annee',
        'utilisateur_id'
    ];


}
