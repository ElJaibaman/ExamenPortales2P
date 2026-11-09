<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Machine;
use App\Models\MaintenanceOrder;

class ProductionLine extends Model
{
    //
    protected $fillable = [
        'name',
        'location',
        'status',
    ];


    public function machines()
    {
        return $this->hasMany(Machine::class);
    }
}
