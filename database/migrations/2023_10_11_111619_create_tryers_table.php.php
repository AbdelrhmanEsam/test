<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
   public function up()
    {
        Schema::create('tryers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('score')->default('0');
            $table->string('session_code');
            // $table->foreignId('competition_id')->constrained();
            $table->unsignedBigInteger('competition_id');
            $table->foreign('competition_id')->references('id')->on('competition');
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
        Schema::dropIfExists('tryers');
    }
};
