<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('meal_types', function (Blueprint $table) {
            $table->id(); // auto-increment ID
            $table->string('name')->unique(); // breakfast, lunch, dinner
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('meal_types');
    }
};
