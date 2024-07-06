<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255);
            $table->string("picture", 255)->nullable();
            $table->string('email', 255)->unique();
            $table->string('password', 255);
            $table->string('nisn', 15);
            $table->char('gender', 1);
            $table->string("birth_place", 255);
            $table->longText('address');
            $table->date("birth_date");
            $table->string('number', 50);
            $table->string('class', 100);
            $table->string('major', 100);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
