<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ticket extends Model
{
    protected $fillable = [
        'nom', 'description', 'prix','valeur','adresse','phone','date','Horaire'
            ];
}
