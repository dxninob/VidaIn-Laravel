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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('lastname');
            $table->string('email')->unique();
            $table->bigInteger('document')->unique();
            $table->date('birthday')->default(date("2022-01-01 00:00:00"));   
            $table->bigInteger('phone')->default(0);  
            $table->string('nameCuidador')->default("");
            $table->bigInteger('documentCuidador')->default(0);
            $table->string('namePatient')->default("");
            $table->bigInteger('documentPatient')->default(0);
            $table->string('entity')->default("");
            $table->string('profession')->default("");
            $table->string('password');
            $table->string('role')->default('patient');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
};
