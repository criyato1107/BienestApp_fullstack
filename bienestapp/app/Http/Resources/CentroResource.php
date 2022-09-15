<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CentroResource extends JsonResource
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
            'id_centro' => $this->id_centro,
            'nombre_centro' => $this->nombre_centro,
            'estado_centro_activo' => $this->estado_centro_activo,
            'id_regional' => $this->id_regional,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}

