<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Relation extends Model
{
   use HasFactory;
   public $timestamps = false;


   public function fromCompetence()
   {
      return $this->belongsTo(Competence::class, 'from');
   }

   public function toCompetence()
   {
      return $this->belongsTo(Competence::class, 'to');
   }

}
