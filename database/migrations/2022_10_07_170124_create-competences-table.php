<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompetencesTable extends Migration
{

   public function up()
   {
      Schema::create('competences', function (Blueprint $table) {
         $table->string('id')->unique();
         $table->string('name');
         $table->integer('semester');
         $table->unsignedBigInteger('uf_id');
         $table->foreign('uf_id')->references('id')->on('ufs');
      });
   }

   public function down()
   {
      Schema::dropIfExists('competences');
   }
}
