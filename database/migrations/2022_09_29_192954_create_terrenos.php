<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('terrenos', function (Blueprint $table) {
            $table->id('id');
            $table->string('nomTer',45);
            $table->string('ciudadTer',30);
            $table->string('descTer',500);
            $table->integer('extensionTer');
            $table->integer('terDispTer');
            $table->string('tipTer',25);
            $table->integer('estTer');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('terrenos');
    }
};
