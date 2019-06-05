<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Arquiteta extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('arquitetas', function (Blueprint $table) {
            $table->increments('id');            
            $table->string('nome', 200);
            $table->string('email', 120)->nullable();
            $table->string('endereco', 200)->nullable();
            $table->string('cau', 10)->nullable();
            $table->string('contato', 12);
            $table->string('login', 20)->nullable();
            $table->string('senha', 120)->nullable();
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
