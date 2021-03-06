<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TampilanInformasiTagihanStatusSudahBayar extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tagihanbayar', function (Blueprint $table) {
            $table->increments('id');
            $table->string('semester');
            $table->string('tahun_ajaran');
            $table->string('no_tagihan');
            $table->string('jumlah_sks');
            $table->string('total_bayar');
            $table->string('status bayar');
            $table->string('detail');
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
        Schema::dropIfExists('tagihanbayar');
    }
}
