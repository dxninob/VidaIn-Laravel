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
        Schema::table('users', function (Blueprint $table) {
            $table->string('lastname');
            $table->string('document');
            $table->string('profession');           
            $table->integer('age');
            $table->integer('phone');
            $table->string('emergencyName');
            $table->integer('emergecyPhone');
            $table->string('role')->default('patient');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['lastname']);
            $table->dropColumn(['profession']);
            $table->dropColumn(['age']);
            $table->dropColumn(['phone']);
            $table->dropColumn(['emergencyName']);
            $table->dropColumn(['emergecyPhone']);
            $table->dropColumn(['role']);
        });
    }
};