<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMensajesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mensajes', function (Blueprint $table) {
            $table->id();
            $table->string('asunto')->nullable();
            $table->string('mensaje')->nullable();
            $table->string('adjunto')->nullable();
            $table->string('prioridad');
            $table->boolean('leido');
            $table->string('co');
            $table->string('cd');
            $table->timestamp('enviado',0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mensajes');
    }
}
