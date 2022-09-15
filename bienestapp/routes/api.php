<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Regional;
use App\Http\Controllers\RegionalController;
use App\Http\Resources\RegionalResource;
use App\Models\inscripcion;
use App\Http\Controllers\inscripcionController;
use App\Http\Resources\inscripcionResource;
use App\Http\Resources\PeriodicidadResource;
use App\Models\Periodicidad;
use App\Http\Controllers\PeriodicidadController;
use App\Models\Centro;
use App\Http\Controllers\CentroController;
use App\Http\Resources\CentroResource;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
 //regional//
Route::get('/regional/{id}',function ($id_regional) {
    return new RegionalResource (Regional::findOrFail($id_regional));
});

Route::get('/Regionals',function () {
    return RegionalResource::collection(Regional::all());
});

Route::put('/regional/{id}', [RegionalController::class, 'update']);

Route::delete('/regional/{id}', [RegionalController::class, 'destroy']); 

Route::patch('/regional/{id}', [RegionalController::class, 'reset']); 


Route::post('/regionals', [RegionalController::class, 'store']);


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
//regional//


//inscripcion//
Route::get('/inscripcion/{id}',function ($id_inscripcion) {
    return new inscripcionResource (inscripcion::findOrFail($id_inscripcion));
});

Route::get('/inscripcions',function () {
    return inscripcionResource::collection(inscripcion::all());
});

Route::put('/inscripcion/{id}', [inscripcionController::class, 'update']);

Route::delete('/inscripcion/{id}', [inscripcionController::class, 'destroy']); 

Route::patch('/inscripcion/{id}', [inscripcionController::class, 'reset']); 


Route::post('/inscripcions', [inscripcionController::class, 'store']);

//inscripcion//

//Periodicidad//
Route::get('/periodicidad/{id}',function ($id_periodicidad) {
    return new PeriodicidadResource (Periodicidad::findOrFail($id_periodicidad));
});

Route::get('/Periodicidad',function () {
    return PeriodicidadResource::collection(Periodicidad::all());
});

Route::put('/periodicidad/{id}', [PeriodicidadController::class, 'update']);

Route::delete('/periodicidad/{id}', [PeriodicidadController::class, 'destroy']); 

Route::patch('/periodicidad/{id}', [PeriodicidadController::class, 'reset']); 


Route::post('/periodicidad', [PeriodicidadController::class, 'store']);


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
//Periodicidad//


//centro//

Route::get('/centro/{id}',function ($id_centro) {
    return new CentroResource (Centro::findOrFail($id_centro));
});

Route::get('/centro', [CentroController::class, 'index']);

Route::put('/centro/{id}', [CentroController::class, 'update']);

Route::delete('/centro/{id}', [CentroController::class, 'destroy']); 

Route::patch('/centro/{id}', [CentroController::class, 'reset']); 


Route::post('/centro', [CentroController::class, 'store']);


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//centro//