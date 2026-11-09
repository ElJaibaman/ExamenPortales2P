<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ProductionLine;
use App\Models\Machine;
use App\Models\MaintenanceOrder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            ProductionLineSeeder::class,
            MachineSeeder::class,
            MaintenanceOrderSeeder::class,
        ]);
    }
}
