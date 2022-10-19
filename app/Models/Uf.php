<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Uf extends Model
{
   use HasFactory;

   public $timestamps = false;

   protected $fillable = [
      'name',
   ];

   public function relation()
   {
      return $this->hasMany(Relation::class, 'uf_id');
   }

   public function competence()
   {
      return $this->hasMany(Competence::class, 'uf_id');
   }
}
