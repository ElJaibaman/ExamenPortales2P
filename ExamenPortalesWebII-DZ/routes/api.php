<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MaintenanceQueryController;
use App\Models\MaintenanceOrder;
use App\Models\Machine;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/maintenance-orders/between-dates/{startDate}/{endDate}', [MaintenanceQueryController::class, 'MaintenanceOrderBeetweenDates']);
Route::get('/maintenance-orders/completed-on-date/{date}', [MaintenanceQueryController::class, 'MaintenanceOrderCompletedOnDate']);
