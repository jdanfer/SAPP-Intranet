<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrearTablaInformaticas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('informaticas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->longText('descripcion');
            $table->integer('base');
            $table->bigInteger('user_id');
            $table->bigInteger('grupo_id');
            $table->date('fecha');
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
        Schema::dropIfExists('informaticas');
    }
}
