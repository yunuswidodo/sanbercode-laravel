<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePertanyaansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pertanyaans', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('judul');
            $table->longText('isi');

            $table->unsignedBigInteger('jawaban_tepat_id');

            // $table->foreign('jawaban_tepat_id')->references('jawabans')->on('id');
            // $table->integer('jawaban_tepat_id');

            $table->unsignedBigInteger('profil_id');
            $table->foreign('profil_id')->references('id')->on('profils');

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
        Schema::dropIfExists('pertanyaans');
    }
}
