<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Competence;
use App\Models\Uf;
use Illuminate\Http\Request;

class CompetenceController extends Controller
{

   public function index(Request $request)
   {

      if ($request->query('uf') !== null) {
         $competences = Uf::where('uf_id', $request->query('uf'))->get();
         return response()->json($competences);
      } else {
         return $this->sendError('No se encontraron datos');
      }
   }


   public function create()
   {
      //
   }


   public function store(Request $request)
   {
      //
   }


   public function show($id)
   {
      //
   }


   public function edit($id)
   {
      //
   }


   public function update(Request $request, $id)
   {
      //
   }


   public function destroy($id)
   {
      //
   }
}
