<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Orcamento extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orcamento', function (Blueprint $table) {
            $table->increments('id');            
            $table->string('nome', 100);
            $table->string('observacao', 300);
            $table->integer('arquiteta_id')->unsigned();
            $table->integer('cliente_id')->unsigned();           
            $table->double('valor', 6, 2);
            $table->date('data_orcamento');
            

            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at');
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
