<?php

namespace Database\Seeders;

use App\Models\Relation;
use Illuminate\Database\Seeder;

class RelationSeeder extends Seeder
{
   /**
    * Run the database seeds.
    *
    * @return void
    */
   public function run()
   {

      $relation = new Relation();
      $relation->name = 'STC0201';
      $relation->from = 'TC2006B';
      $relation->to = 'TC2008B ';
      $relation->uf_id = 1;
      $relation->save();

      $relation = new Relation();
      $relation->name = 'STC0202';
      $relation->from = 'TC2037';
      $relation->to = 'TC30058 ';
      $relation->uf_id = 1;
      $relation->save();

      $relation = new Relation();
      $relation->name = 'STC0203';
      $relation->from = 'EG1002';
      $relation->to = 'EG1003';
      $relation->uf_id = 1;
      $relation->save();

      //   $relation = new Relation();
      //   $relation->name = 'STC0204';
      //   $relation->from = '';
      //   $relation->to = '';
      //   $relation->uf_id = '';
      //   $relation->save();

      //   $relation = new Relation();
      //   $relation->name = 'STC0205';
      //   $relation->from = '';
      //   $relation->to = '';
      //   $relation->uf_id = '';
      //   $relation->save();

      //   $relation = new Relation();
      //   $relation->name = 'STC0206';
      //   $relation->from = '';
      //   $relation->to = '';
      //   $relation->uf_id = '';
      //   $relation->save();

      //   $relation = new Relation();
      //   $relation->name = 'STC020';
      //   $relation->from = '';
      //   $relation->to = '';
      //   $relation->uf_id = '';
      //   $relation->save();
   }
}
