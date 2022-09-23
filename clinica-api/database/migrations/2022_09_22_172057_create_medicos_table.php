<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMedicosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medicos', function (Blueprint $table) {
            $table->integer('id')->autoIncrement();
            $table->string('nombre', 100)->default('');
            $table->string('cedula', 20)->default('');
            $table->string('registro_profesional', 100)->default('');
            $table->string('direccion', 100)->default('');
            $table->string('telefono', 100)->default('');
            $table->string('email', 100)->default('');
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
        Schema::dropIfExists('medicos');
    }
}
