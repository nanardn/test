<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePengajuanCrowdfunding extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('crowds', function (Blueprint $table) {
            $table->increments('idproyek');
            $table->increments('iduser')
            $table->string('PJName');
            $table->string('ProjectName');
            $table->string('DanaButuh');
            $table->string('DanaNow');
            $table->string('fotoProyek');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('crowds');
    }
}
