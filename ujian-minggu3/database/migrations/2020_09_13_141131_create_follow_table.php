<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFollowTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('follow', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->unsignedBigInteger('user_id_diikuti')->nullable();
            $table->foreign('user_id_diikuti')->references('id')->on('users');
            
            $table->unsignedBigInteger('user_id_mengikuti')->nullable();
            $table->foreign('user_id_mengikuti')->references('id')->on('users');
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
        Schema::dropIfExists('follow');
    }
}
