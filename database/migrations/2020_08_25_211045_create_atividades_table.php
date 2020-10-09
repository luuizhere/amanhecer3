<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAtividadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('atividades', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nome');
            $table->foreign('habilidade_id')->references('id')->on('habilidades');
            $table->bigInteger('habilidade_id')->unsigned();
            $table->foreign('nivel_id')->references('id')->on('nivels');
            $table->bigInteger('nivel_id')->unsigned();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('atividades');
    }
}
