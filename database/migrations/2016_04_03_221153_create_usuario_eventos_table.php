<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuarioEventosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuario_eventos', function (Blueprint $table) {

            $table->increments('id');
            $table->integer('usuario_id')->unsigned();
            $table->integer('evento_id')->unsigned();
            $table->timestamps();

            $table->foreign('evento_id')->references('id')->on('eventos');
            $table->foreign('usuario_id')->references('id')->on('usuarios');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        if(!Schema::hasTable('usuario_eventos')) return;
        Schema::table('usuario_eventos', function($table){
            $table->dropForeign('usuario_eventos_evento_id_foreign');
            $table->dropForeign('usuario_eventos_usuario_id_foreign');
        });

        Schema::drop('usuario_eventos');
    }
}
