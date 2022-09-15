<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class RegionalResource extends JsonResource
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
            'id_regional' => $this->id_regional,
            'nombre_regional' => $this->nombre_regional,
            'estado_regional_activo' => $this->estado_regional_activo,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
