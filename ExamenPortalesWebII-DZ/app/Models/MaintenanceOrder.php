<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Machine;
use App\Models\MaintenanceOrder;

class MaintenanceOrder extends Model
{
    //
    protected $fillable = [
        'machine_id',
        'order_number',
        'maintenance_type',
        'status',
        'technician',
        'estimated_cost',
        'actual_cost',
        'scheduled_at',
        'completed_at',
    ];

    public function machine()
    {
        return $this->belongsTo(Machine::class);
    }
}
