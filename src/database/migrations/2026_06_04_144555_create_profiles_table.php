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
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('title');
            $table->string('photo')->nullable();
            $table->string('university')->nullable();
            $table->string('major')->nullable();
            $table->decimal('gpa', 3, 2)->nullable();
            $table->text('short_description')->nullable();
            $table->longText('about')->nullable();
            $table->string('linkedin')->nullable();
            $table->string('github')->nullable();
            $table->string('email')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profiles');
    }
};

