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
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id('id',11);
            $table->string('nombre', 30);
            $table->string('apellido', 30);
            $table->string('contrasena', 32);
            $table->string('correo', 50);
            $table->string('tipo_doc', 4);
            $table->integer('num_doc');
            $table->integer('tipo_user');
            $table->boolean('estado')->nullable();
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
        Schema::dropIfExists('usuarios');
    }
};
