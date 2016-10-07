<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(){
        Schema::create('Users', function(Blueprint $table){
            $table->increments('id');
            $table->integer('dre');
            $table->string('nome');
            $table->string('predio');
            $table->string('id_curso');
            $table->string('email')->unique();
            $table->string('password');
            $table->integer('nivel')->default(0);
            $table->integer('avaliacao')->nullable();
            $table->softDeletes();
            $table->timestamps();
            $table->rememberToken();


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(){
        Schema::dropIfExists('usuarios');
    }
}
