<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estudiantes', function (Blueprint $table) {
            $table->id();

            $table->string('nombre');
            $table->string('num_id');
            $table->string('genero');
            $table->string('grado');
            $table->date('fecha_matricula');
            $table->date('fecha_nac');
            $table->string('nombre_padre');
            $table->string('nombre_madre');
            $table->string('correo_acudiente');
            $table->string('eps');

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
        Schema::dropIfExists('estudiantes');
    }
};
