<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSpeakingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('speaking', function (Blueprint $table) {
          
            $table->id();
        
            $table->string('level');
            $table->string('en_title');
            $table->string('ge_title');
            $table->string('en_description')->nullable();
            $table->string('ge_description')->nullable();
           
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
