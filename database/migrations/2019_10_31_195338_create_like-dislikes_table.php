<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLikeDislikesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('likedislikes', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->unsignedBigInteger('id_product');
            $table->unsignedBigInteger('id_user');

            $table->string('type');
            $table->string('closed');
            $table->timestamps();


            $table->foreign('id_product')
             ->references('id')->on('inventarios')
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
        Schema::dropIfExists('likedislikes');
    }
}
