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
        //
        Schema::create('citas', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('id');
            $table->date('fecha_cita');
            $table->time('hora_cita');
            $table->integer('masc_cita');
            $table->integer('cli_cita');
            $table->timestamps();

            $table->foreign('masc_cita')->references('id')->on('mascotas')->onDelete("cascade");
            $table->foreign('cli_cita')->references('id')->on('clientes')->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        
    }
};
