<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBandejaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bandeja', function (Blueprint $table) {
            $table->unsignedBigInteger('idu');
            $table->unsignedBigInteger('idm');
            $table->foreign('idu')->references('id')->on('users');
            $table->foreign('idm')->references('id')->on('mensajes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bandeja');
    }
}
