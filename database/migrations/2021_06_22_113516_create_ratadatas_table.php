<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRatadatasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ratadatas', function (Blueprint $table) {
            $table->id();
            $table->String('ph')->nullable();
            $table->String('kelembapan')->nullable();
            $table->String('kondisi_kelembapan')->nullable();
            $table->String('kondisi_ph')->nullable();
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
        Schema::dropIfExists('ratadatas');
    }
}
