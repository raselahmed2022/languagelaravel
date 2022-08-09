<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSpeaking extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('speaking', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('en_title')->nullable();
            $table->string('ge_title')->nullable();
            $table->longText('en_description')->nullable();
            $table->longText('ge_description')->nullable();
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
        Schema::dropIfExists('speaking');
    }
}
