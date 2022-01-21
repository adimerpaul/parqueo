<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParqueosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parqueos', function (Blueprint $table) {
            $table->id();
            $table->string("placa")->nullable();
            $table->string("conductor")->nullable();
            $table->string("nivel")->nullable();
            $table->integer("carril")->nullable();
            $table->date("fechaingreso")->nullable();
            $table->time("horaingreso")->nullable();
            $table->string("fechasalida")->nullable();
            $table->timw("horasalida")->nullable();
            $table->string("tipo")->nullable();
            $table->integer("horas")->nullable();
            $table->double("bs")->nullable();
            $table->string("operador")->nullable();
            $table->string("estado")->default('OCUPADO')->nullable();
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
        Schema::dropIfExists('parqueos');
    }
}
