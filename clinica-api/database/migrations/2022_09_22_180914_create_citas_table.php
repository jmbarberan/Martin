<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCitasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('citas', function (Blueprint $table) {
            $table->integer('id')->autoIncrement();
            $table->integer('paciente_id')->default(0);
            $table->integer('medico_id')->default(0);
            $table->integer('especialidad_id')->default(0);
            $table->datetime('fecha');
            $table->text('sintomas')->charset('utf8mb4');
            $table->string('exploracion', 200)->charset('utf8mb4')->default('');
            $table->string('diagnostico', 200)->charset('utf8mb4')->default('');
            $table->string('signos_vitales', 200)->charset('utf8mb4')->default('');
            $table->text('tratamiento')->charset('utf8mb4');
            $table->integer('estado')->default(0);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('citas');
    }
}
