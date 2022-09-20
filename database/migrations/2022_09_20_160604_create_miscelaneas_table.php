<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMiscelaneasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('miscelaneas', function (Blueprint $table) {
            $table->id();
            $table->string('articulo');
            $table->string('Precio_v');
            $table->string('Precio_c');
            $table->string('Existencia_m');
            $table->string('Existencia_mx');
            $table->string('Categoria');
            $table->string('Fabricante');
            $table->string('Existencia_a');
            $table->string('Imagen');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('miscelaneas');
    }
}
