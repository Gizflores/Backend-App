<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rates', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->unsignedBigInteger('id_boutique');
            $table->unsignedBigInteger('id_user');
            $table->string('rate');
            $table->timestamps();


            $table->foreign('id_boutique')
             ->references('id')->on('boutiques')
             ->onDelete('cascade')
             ->onUpdate('cascade');

            $table->foreign('id_user')
             ->references('id')->on('users')
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
        Schema::dropIfExists('rates');
    }
}
