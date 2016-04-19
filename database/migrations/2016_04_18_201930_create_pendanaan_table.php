<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePendanaanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pendanaan', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_pj');
            $table->string('nama_proyek');
            $table->string('kategori');
            $table->integer('total_dana');
            $table->integer('sementara_dana');
            $table->text('deskripsi');
            $table->string('foto_proyek');
            $table->string('foto_pj');
            $table->integer('status');
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
        Schema::drop('pendanaan');
    }
}
