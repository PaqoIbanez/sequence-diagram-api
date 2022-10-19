<?php

namespace Database\Seeders;

use App\Models\UF;
use Illuminate\Database\Seeder;

class UFSeeder extends Seeder
{

   public function run()
   {
      $uf = new Uf();
      $uf->name = "Computer Science and Technology Engineering 2019";
      $uf->save();
   }
}
