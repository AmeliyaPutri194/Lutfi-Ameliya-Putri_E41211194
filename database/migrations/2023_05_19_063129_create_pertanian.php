<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePertanian extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pertanian', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama tanaman');
            $table->string('hasil panen');
            $table->string('lama tanam');
            $table->date('tanggal panen');
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
        Schema::dropIfExists('pertanian');
    }
}
