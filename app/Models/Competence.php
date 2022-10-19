<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Competence extends Model
{
   use HasFactory;

   protected $fillable = [
      'id',
      'name',
      'semester',
      'uf_id',
   ];

   public $incrementing = false;
   protected $keyType = 'string';

   public $timestamps = false;

   public function uf()
   {
      return $this->belongsTo(Uf::class, 'uf_id');
   }

}
