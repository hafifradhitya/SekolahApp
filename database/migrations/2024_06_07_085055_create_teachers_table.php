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
        Schema::create('teachers', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255);
            $table->string("picture", 255)->nullable();
            $table->string('nip', 16);
            $table->char('gender', 1);
            $table->string("birth_place", 255);
            $table->date("birth_date");
            $table->string('number', 50);
            $table->string('degree', 50);
            $table->string('teach', 100);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teachers');
    }
};
