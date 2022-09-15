<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PeriodicidadResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return  [
            'id_periodicidad' => $this->id_periodicidad,
            'nombre_periodicidad' => $this->nombre_periodicidad,
            'estado_periodicidad_activo' => $this->estado_periodicidad_activo,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
