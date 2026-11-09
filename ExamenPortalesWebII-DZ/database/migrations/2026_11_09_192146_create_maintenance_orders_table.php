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
        Schema::create('maintenance_orders', function (Blueprint $table) {
        $table->id();
        $table->foreignId('machine_id')
            ->constrained('machines')
            ->cascadeOnDelete();

        $table->string('order_number', 30)->unique();
        $table->string('maintenance_type', 30);
        $table->string('status', 30);
        $table->string('technician', 100);
        $table->decimal('estimated_cost', 10, 2);
        $table->decimal('actual_cost', 10, 2)->nullable();
        $table->date('scheduled_at')->nullable();
        $table->date('completed_at')->nullable();
        $table->timestamps();
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('maintenance_orders');
    }
};
