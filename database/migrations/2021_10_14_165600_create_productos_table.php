<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('productos');
        Schema::create('productos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('proveedor_id')->nullable();
            $table->string('SKU', 8);
            $table->string('Nombre');
            $table->text('Descripcion');
            $table->decimal('Costo', 8, 2);
            $table->decimal('Precio', 8, 2);
            $table->boolean('PagaIVA')->default(1);
            $table->timestamps();

            $table->foreign('proveedor_id')
                ->references('id')->on('proveedores')
                ->onUpdate('cascade')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('productos');
    }
}
