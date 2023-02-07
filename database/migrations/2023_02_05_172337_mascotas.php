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
        Schema::create('mascotas', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->integer('id');
            $table->integer('cli_masc');
            $table->string('nom_masc');
            $table->string('tipo_masc');
            
            $table->timestamps();
            $table->primary('id');

            $table->foreign('cli_masc')->references('id')->on('clientes')->onDelete("cascade");
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
};