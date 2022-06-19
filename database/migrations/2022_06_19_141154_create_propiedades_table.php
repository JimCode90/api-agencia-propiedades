<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropiedadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('propiedades', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_tipo_propiedad');
            $table->foreignId('id_categoria_propiedad');
            $table->foreignId('id_agencia');
            $table->text('nombre');
            $table->double('precio');
            $table->text('descripcion');
            $table->text('direccion');
            $table->text('lat');
            $table->text('lng');
            $table->integer('nro_dormitorios');
            $table->integer('nro_bathroom');
            $table->integer('nro_garage');
            $table->text('area');
            $table->text('imagen');
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
        Schema::dropIfExists('propiedades');
    }
}
