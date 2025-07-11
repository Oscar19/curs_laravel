<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Partido extends Model
{
    use HasFactory;
    protected $table = 'partidos';
    protected $primaryKey = 'partido_id';

    protected $fillable = [
        'fecha', 
        'equipo_local_id', 
        'equipo_visitante_id', 
        'resultado_local', 
        'resultado_visitante'
    ];

    public function equipoLocal()
    {
        return $this->belongsTo(Equipo::class, 'equipo_local_id', 'equipo_id');
    }

    public function equipoVisitante()
    {
        return $this->belongsTo(Equipo::class, 'equipo_visitante_id', 'equipo_id');
    }
}
