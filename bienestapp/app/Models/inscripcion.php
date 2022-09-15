<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inscripcion extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_inscripcion' , 'fecha_inicio_inscripcion' , 'fecha_final_inscripcion','hora_final_inscripcion' ,'estado_inscripcion_activo' ,
    ];

    protected $primaryKey="id_inscripcion";
    protected $table = 'inscripcion';
    public $timestamps = false;
}
