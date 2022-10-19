<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class RelationResource extends JsonResource
{
   public function toArray($request)
   {
      return [
         'name' => $this->name,
         'from' => $this->fromCompetence,
         'to' => $this->toCompetence,
      ];
   }
}
