<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EntregaItAcademy extends Model
{
    protected $table = 'entrega_it_academies';

    protected $fillable = [
        'nom_entrega',
        'sprint',
        'data_entrega',
        'link_github',
        'comentaris'
    ];
}
