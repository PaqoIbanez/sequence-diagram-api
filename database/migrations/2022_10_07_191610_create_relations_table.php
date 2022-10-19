<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRelationsTable extends Migration
{
   public function up()
   {
      Schema::create('relations', function (Blueprint $table) {
         $table->id();
         $table->string('name');
         $table->string('from');
         $table->string('to');
         $table->unsignedBigInteger('uf_id');
         $table->foreign('uf_id')->references('id')->on('ufs');
         $table->foreign('from')->references('id')->on('competences');
         $table->foreign('to')->references('id')->on('competences');
      });
   }

   public function down()
   {
      Schema::dropIfExists('relations');
   }
}
