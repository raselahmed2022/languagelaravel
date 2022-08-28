<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersregisterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usersregister', function (Blueprint $table) {
          
            $table->id();
            $table->string('full_name');
            $table->string('email');
            $table->string('residential_address');
            $table->string('contact_number');
            $table->string('nationality');
            $table->string('passport_national_ID');
            $table->string('debit_credit_card');
            
        
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
        Schema::dropIfExists('usersregister');
    }
}
