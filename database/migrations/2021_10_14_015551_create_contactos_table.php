<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('contactos');

        Schema::create('contactos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Nombres', 64);
            $table->string('Apellidos', 64);
            $table->string('Telefono', 32);
            $table->text('Email');
            $table->morphs('contactable');
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
        Schema::dropIfExists('contactos');
    }
}
