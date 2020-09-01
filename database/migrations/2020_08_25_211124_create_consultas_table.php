<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConsultasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('consultas', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->date('data_consulta');
            $table->foreign('paciente_id')->references('id')->on('pacientes');
            $table->bigInteger('paciente_id')->unsigned();
            $table->foreign('atividade_id')->references('id')->on('atividades');
            $table->bigInteger('atividade_id')->unsigned();
            $table->foreign('resposta_id')->references('id')->on('respostas');
            $table->bigInteger('resposta_id')->unsigned();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('consultas');
    }
}
