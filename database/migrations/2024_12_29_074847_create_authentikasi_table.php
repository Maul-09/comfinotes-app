<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAuthentikasiTable extends Migration
{
    public function up()
    {
        Schema::create('authentikasi', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->nullable()->unique(); // Hanya untuk admin
            $table->string('grup_number')->nullable()->unique(); // Hanya untuk user
            $table->string('password');
            $table->enum('user_type', ['admin', 'user']); // admin atau user
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('authentikasi');
    }
}
