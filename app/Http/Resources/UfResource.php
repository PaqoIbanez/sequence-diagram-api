<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UfResource extends JsonResource
{
    public function toArray($request)
    {
      return [
         'id' => $this->id,
         'nombre' => $this->name,
         'competences' => $this->competence,
         // 'relations' => $this->relation,
      ];
    }
}
