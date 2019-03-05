<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Projeto extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projetos', function (Blueprint $table) {
            $table->increments('id');            
            $table->string('nome', 100);
            $table->string('descricao', 300);
            $table->integer('arquiteta_id')->unsigned();
            $table->integer('cliente_id')->unsigned();
            $table->double('area_total', 6, 2);
            $table->double('area_construcao', 6, 2);
            $table->string('tipo', 20);
            $table->string('cidade', 60);

            $table->timestamp('data_inicio_obra');
            $table->timestamp('data_entega');

            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at');

            $table->foreign('arquiteta_id')
                ->references('id')->on('arquitetas')
                ->onDelete('cascade');
            $table->foreign('cliente_id')
                ->references('id')->on('clientes')
                ->onDelete('cascade');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
