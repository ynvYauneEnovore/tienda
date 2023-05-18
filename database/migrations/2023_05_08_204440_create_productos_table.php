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
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->string('Nombre', 345)->nullable();
            $table->decimal('Precio', 19, 2)->nullable();
            $table->string('Descripcion', 445)->nullable();
            $table->tinyInteger('Estado')->nullable();
            $table->string('imagen', 255)->nullable();
            $table->integer('min')->nullable();
            $table->integer('max')->nullable();
            $table->decimal('stock', 19, 2)->default(0);

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
        Schema::dropIfExists('productos');
    }
};
