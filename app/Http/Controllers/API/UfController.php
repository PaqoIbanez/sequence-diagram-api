<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\BaseController;
use App\Http\Controllers\Controller;
use App\Http\Resources\UfResource;
use App\Models\Uf;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\TryCatch;

class UfController extends BaseController
{
   public function index()
   {
      $ufs = Uf::all();
      return $this->sendResponse(UfResource::collection($ufs), 'Listado Unidades de Formacion');
   }
   public function create()
   {
   }
   public function store(Request $request)
   {
   }

   public function show($id)
   {
      try {
         $uf = Uf::findOrFail($id)->get();
         return $this->sendResponse(UfResource::collection($uf), 'Datos de la unidad de formación');
      } catch (\Throwable $th) {
         return $this->sendError('Datos de la unidad de formación');
      }
   }

   public function edit($id)
   {
   }

   public function update(Request $request, $id)
   {
   }

   public function destroy($id)
   {
   }
}
