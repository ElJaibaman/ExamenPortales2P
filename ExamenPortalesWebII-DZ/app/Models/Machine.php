<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\ProductionLine;
use App\Models\MaintenanceOrder;

class Machine extends Model
{
    //
    protected $fillable = [
        'production_line_id',
        'code',
        'name',
        'type',
        'status',
        'criticality',
    ];


    public function productionLine()
    {
        return $this->belongsTo(ProductionLine::class);
    }

    public function maintenanceOrders()
    {
        return $this->hasMany(MaintenanceOrder::class);
    }
}
