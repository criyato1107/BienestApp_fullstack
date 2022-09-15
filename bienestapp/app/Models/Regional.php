<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Regional extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_regional' , 'nombre_regional' , 'estado_regional_activo'
    ];

    protected $primaryKey="id_regional";
    protected $table = 'regional';
    public $timestamps = false;
}
