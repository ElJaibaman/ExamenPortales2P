<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Machine;
use App\Models\ProductionLine;
use App\Models\MaintenanceOrder;

class MachineSeeder extends Seeder
{
   public function run(): void
{
    Machine::insert([
        [
            'production_line_id' => 1,
            'code' => 'MAQ-001',
            'name' => 'Cortadora industrial',
            'type' => 'Corte',
            'status' => 'operativa',
            'criticality' => 'alta',
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'production_line_id' => 1,
            'code' => 'MAQ-002',
            'name' => 'Prensa hidráulica',
            'type' => 'Prensado',
            'status' => 'mantenimiento',
            'criticality' => 'alta',
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'production_line_id' => 2,
            'code' => 'MAQ-003',
            'name' => 'Soldadora automática',
            'type' => 'Soldadura',
            'status' => 'operativa',
            'criticality' => 'media',
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'production_line_id' => 2,
            'code' => 'MAQ-004',
            'name' => 'Compresor industrial',
            'type' => 'Compresión',
            'status' => 'operativa',
            'criticality' => 'alta',
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'production_line_id' => 3,
            'code' => 'MAQ-005',
            'name' => 'Equipo de ensamblaje',
            'type' => 'Ensamblaje',
            'status' => 'operativa',
            'criticality' => 'media',
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'production_line_id' => 4,
            'code' => 'MAQ-006',
            'name' => 'Cabina de pintura',
            'type' => 'Pintura',
            'status' => 'fuera_servicio',
            'criticality' => 'alta',
            'created_at' => now(),
            'updated_at' => now(),
        ],
    ]);
}
}
