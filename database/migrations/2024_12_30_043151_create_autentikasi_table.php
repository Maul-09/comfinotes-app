<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('autentikasi', function (Blueprint $table) {
            $table->id();
            $table->string('group_code');
            $table->string('username')->unique();
            $table->string('email')->unique();
            $table->string('password');
            $table->string('user_type');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('autentikasi');
    }

};
