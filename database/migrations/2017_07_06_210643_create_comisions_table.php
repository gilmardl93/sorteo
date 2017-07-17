<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComisionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Comision.comision', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('idpostulante_1');
            $table->string('nro_inscripcion_1');
            $table->string('dni_1');
            $table->string('datos_1');
            $table->string('cargo_1');
            $table->integer('idpostulante_2');
            $table->string('nro_inscripcion_2');
            $table->string('dni_2');
            $table->string('datos_2');
            $table->string('cargo_2');
            $table->integer('idpostulante_3');
            $table->string('nro_inscripcion_3');
            $table->string('dni_3');
            $table->string('datos_3');
            $table->string('cargo_3');
            $table->string('proceso');
            $table->string('examen');
            $table->date('fecha');

            $table->softDeletes();

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
        Schema::dropIfExists('Comision.comision');
    }
}
