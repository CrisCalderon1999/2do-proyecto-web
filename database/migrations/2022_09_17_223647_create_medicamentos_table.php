<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMedicamentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medicamentos', function (Blueprint $table) {
            $table->id();
            $table->string('Nombre');
            $table->string('Precio_venta');
            $table->string('Precio_compra');
            $table->string('Existencia_min');
            $table->string('Existencia_max');
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
        Schema::dropIfExists('medicamentos');
    }
}
