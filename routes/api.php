<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AppointmentController;


Route::get('/', function () {
    return response()->json([
        'message' => 'API werkt 🎉'
    ]);
});

Route::post('/appointments', [AppointmentController::class, 'store']);
