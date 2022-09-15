<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Periodicidad extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_periodicidad' , 'nombre_periodicidad' , 'estado_periodicidad_activo'
    ];

    protected $primaryKey="id_periodicidad";
    protected $table = 'periodicidad';
    public $timestamps = false;
}
