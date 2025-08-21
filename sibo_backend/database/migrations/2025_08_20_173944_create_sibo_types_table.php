<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('sibo_types', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('short_name')->nullable();
            $table->timestamps();
        });

        // Seed the types
        DB::table('sibo_types')->insert([
            ['name' => 'Hydrogen-Dominant SIBO', 'short_name' => 'Hydrogen'],
            ['name' => 'Methane-Dominant SIBO', 'short_name' => 'Methane'],
            ['name' => 'Mixed-Dominant SIBO', 'short_name' => 'Mixed'],
            ['name' => 'Hydrogen sulfide SIBO', 'short_name' => 'H2S'],
        ]);
    }

    public function down(): void
    {
        Schema::dropIfExists('sibo_types');
    }
};
