<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\BaseController;
use App\Http\Resources\RelationResource;
use App\Models\Relation;

class RelationsController extends BaseController
{
   public function index()
   {
      $ufs = Relation::all();
      return $this->sendResponse(RelationResource::collection($ufs), 'Listado de relaciones');
   }
}
