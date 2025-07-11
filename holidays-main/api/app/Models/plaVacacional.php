<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class plaVacacional extends Model
{
    protected $table = 'pla_vacacionals'; 
    protected $fillable = [
        'nom', 'lloc', 'data', 'tipus'
    ];
}
