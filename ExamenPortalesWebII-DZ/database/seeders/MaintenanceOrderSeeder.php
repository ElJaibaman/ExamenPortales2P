<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\MaintenanceOrder;
use App\Models\Machine;
use App\Models\ProductionLine;

class MaintenanceOrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
   public function run(): void
{
    MaintenanceOrder::insert([
        [
            'machine_id' => 1,
            'order_number' => 'ORD-001',
            'maintenance_type' => 'preventivo',
            'status' => 'finalizado',
            'technician' => 'Carlos Martínez',
            'estimated_cost' => 1500,
            'actual_cost' => 1450,
            'scheduled_at' => '2026-01-10',
            'completed_at' => '2026-01-11',
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'machine_id' => 2,
            'order_number' => 'ORD-002',
            'maintenance_type' => 'correctivo',
            'status' => 'pendiente',
            'technician' => 'José Hernández',
            'estimated_cost' => 2500,
            'actual_cost' => null,
            'scheduled_at' => '2026-02-15',
            'completed_at' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'machine_id' => 3,
            'order_number' => 'ORD-003',
            'maintenance_type' => 'preventivo',
            'status' => 'en_proceso',
            'technician' => 'María López',
            'estimated_cost' => 1800,
            'actual_cost' => null,
            'scheduled_at' => '2026-03-20',
            'completed_at' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'machine_id' => 4,
            'order_number' => 'ORD-004',
            'maintenance_type' => 'correctivo',
            'status' => 'finalizado',
            'technician' => 'Pedro Gómez',
            'estimated_cost' => 3200,
            'actual_cost' => 3100,
            'scheduled_at' => '2026-04-05',
            'completed_at' => '2026-04-06',
            'created_at' => now(),
            'updated_at' => now(),
        ],
    ]);
}
}
