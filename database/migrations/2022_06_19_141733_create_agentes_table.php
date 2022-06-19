<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAgentesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agentes', function (Blueprint $table) {
            $table->id();
            $table->string('nombres');
            $table->string('apellidos');
            $table->string('dni');
            $table->string('profesion');
            $table->text('experiencia');
            $table->text('biografia');
            $table->string('email');
            $table->string('telefono');
            $table->string('url_facebook');
            $table->string('url_tweeter');
            $table->string('url_linkedin');
            $table->string('premios');
            $table->string('clientes');
            $table->string('proyectos');
            $table->string('foto');
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
        Schema::dropIfExists('agentes');
    }
}
