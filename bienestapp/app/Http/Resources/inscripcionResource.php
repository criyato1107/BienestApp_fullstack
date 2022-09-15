<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class inscripcionResource extends JsonResource
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
            'id_inscripcion' => $this->id_inscripcion,
            'fecha_inicio_inscripcion' => $this->fecha_inicio_inscripcion,
            'fecha_final_inscripcion' => $this->fecha_final_inscripcion,
            'hora_final_inscripcion' => $this->hora_final_inscripcion,
            'estado_incripcion_activo' => $this->estado_inscripcion_activo,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
