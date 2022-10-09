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
        Schema::create('voluntarios', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->String('nombre')->nullable();
            $table->String('apellido')->nullable();
            $table->enum('tipoDoc', ['TI', 'CC', 'CE'])->nullable();
            $table->bigInteger('numDoc')->nullable();
            $table->String('correo')->nullable();
            $table->bigInteger('telefono')->nullable();
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
        Schema::dropIfExists('voluntarios');
    }
};
