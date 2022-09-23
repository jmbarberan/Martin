<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePacientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pacientes', function (Blueprint $table) {
            $table->integer('id')->autoIncrement();
            $table->string('nombre', 100)->charset('utf8mb4')->default('');
            $table->string('cedula', 20)->default('');
            $table->date('fecha_nacimiento')->nullable();
            $table->string('direccion', 100)->charset('utf8mb4')->default('');
            $table->string('telefono', 50)->default('');
            $table->string('email', 100)->charset('utf8mb4')->default('');            
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
        Schema::dropIfExists('pacientes');
    }
}
