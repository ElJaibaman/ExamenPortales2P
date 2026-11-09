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
        Schema::create('machines', function (Blueprint $table) {
        $table->id();
        $table->foreignId('production_line_id')
            ->constrained('production_lines')
            ->cascadeOnDelete();

        $table->string('code', 30)->unique();
        $table->string('name', 100);
        $table->string('type', 50);
        $table->string('status', 30);
        $table->string('criticality', 30);
        $table->timestamps();
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('machines');
    }
};
