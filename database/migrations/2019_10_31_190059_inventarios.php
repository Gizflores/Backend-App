<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Inventarios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inventarios', function (Blueprint $table) {
            $table->bigIncrements('id');   
                     
            $table->unsignedBigInteger('id_boutique');
            $table->unsignedBigInteger('id_categoria');

            $table->string('img_principal')->nullable();
            $table->string('nombre',100);
            $table->string('descripcion',200);
            $table->double('precio');
            $table->integer('disponibilidad');
            $table->timestamps();


            $table->foreign('id_boutique')
             ->references('id')->on('boutiques')
             ->onDelete('cascade')
             ->onUpdate('cascade');

             $table->foreign('id_categoria')
             ->references('id')->on('categorias')
             ->onDelete('cascade')
             ->onUpdate('cascade');
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
