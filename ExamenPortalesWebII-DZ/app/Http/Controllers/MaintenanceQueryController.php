<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MaintenanceOrder;
use App\Models\Machine;
use App\Models\ProductionLine;

class MaintenanceQueryController extends Controller
{
    //
    public function index()
    {
        $maintenanceOrders = MaintenanceOrder::with('machine.productionLine')->get();
        return response()->json($maintenanceOrders);
    }

    //CONSUTLA 1: Obtener todas las órdenes de mantenimiento programadas entre dos fechas específicas.
  public function MaintenanceOrderBeetweenDates($startDate, $endDate)
    {
        $maintenanceOrders = MaintenanceOrder::whereBetween('scheduled_at', [$startDate, $endDate])
            ->orderBy('scheduled_at', 'asc')
            ->select('order_number', 'maintenance_type', 'status', 'technician', 'estimated_cost', 'scheduled_at')
            ->get();

        return response()->json($maintenanceOrders);
    }


    //CONSULTA 2: Obtener todas las órdenes de mantenimiento completadas en una fecha específica.
    public function MaintenanceOrderCompletedOnDate($date)
    {


        $maintenanceOrders = MaintenanceOrder::whereDate('completed_at', $date)
            ->orderBy('order_number', 'asc')
            ->select('order_number', 'machine_id', 'maintenance_type', 'technician', 'actual_cost', 'completed_at')
            ->get();

        return response()->json($maintenanceOrders);
    }

    //consulta 3:

    public function machinesWithProductionLine()
    {
       $machines = Machine::with('productionLine:id,name,location')
                ->select('id', 'code', 'name', 'status', 'criticality', 'production_line_id')
                ->orderBy('name')
                ->get();

            return response()->json($machines);
    }
    

    //consulta 4: Obtener la cantidad de órdenes de mantenimiento por máquina, ordenadas de mayor a menor.

    public function MaintenanceOrderCountByMachine()
    {
        $machines = Machine::withCount('maintenanceOrders')
            ->select('code', 'name', 'status', 'criticality')
            ->orderBy('maintenance_orders_count', 'desc')
            ->get();

        return response()->json($machines);
    }
    
}
