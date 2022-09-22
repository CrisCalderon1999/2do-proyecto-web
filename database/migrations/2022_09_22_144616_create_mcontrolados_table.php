<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMcontroladosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mcontrolados', function (Blueprint $table) {
            $table->id();
            $table->string('Nombre');
            $table->string('Precio_ven');
            $table->string('Precio_com');
            $table->string('Existencia_min');
            $table->string('Existencia_max');
            $table->string('Requisitos');
            $table->string('Imagen');
            $table->unsignedBigInteger('id_Laboratorio')->nullable();
            $table->unsignedBigInteger('id_Presentacion')->nullable();
            $table->unsignedBigInteger('id_Via_administracion')->nullable();
            
            $table->timestamps();

            $table->foreign('id_Laboratorio')
                            ->references('id')->on('laboratorios')
                            ->onDelete('set null');
            $table->foreign('id_Presentacion')
                            ->references('id')->on('presentacions')
                            ->onDelete('set null');
            $table->foreign('id_Via_administracion')
                            ->references('id')->on('via_administracions')
                            ->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mcontrolados');
    }
}
