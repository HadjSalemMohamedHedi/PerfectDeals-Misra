<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Deal extends Model
{
    protected $fillable = [
        'prix', 'nom', 'description','valeur','adresse','phone'
            ];
}
