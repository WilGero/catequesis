<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('catecumenos', function (Blueprint $table) {
            $table->id();//Integer unsigned increment
            $table->string('name');//Nombres
            $table->string('surname');//Apellidos
            $table->date('birth')->nullable();//Fecha de nacimiento
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
        Schema::dropIfExists('catecumenos');
    }
};
