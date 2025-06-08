<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController; // ¡Importa tu controlador aquí!

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Tus rutas personalizadas para la API de clientes
Route::prefix('prova')->group(function () {
    // Ruta para listar TODOS los clientes
    // MÉTODO: GET
    // URL: /api/prova/clients
    Route::get('/clients', [ClientController::class, 'index']); // <--- Esta es para el GET general

    // Ruta para crear un nuevo cliente
    // MÉTODO: POST
    // URL: /api/prova/clients
    Route::post('/clients', [ClientController::class, 'store']); // <--- Esta es para el POST

    // Ruta para obtener UN cliente específico por ID
    // MÉTODO: GET
    // URL: /api/prova/clients/{client_id}
    Route::get('/clients/{client}', [ClientController::class, 'show']); // <--- Esta es para el GET por ID
});
