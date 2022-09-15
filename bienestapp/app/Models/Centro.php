<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Centro extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_centro' , 'nombre_centro' , 'estado_centro_activo' , 'id_regional'
    ];

    protected $primaryKey="id_centro";
    protected $table = 'centro';
    public $timestamps = false;
}