<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\tableusersController;
use App\Http\Controllers\bloodGroupController;
use App\Http\Controllers\hospitalsController;
use App\Http\Controllers\ambulancesController;
use App\Http\Controllers\firstaidsController;




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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('AppUserSignup', [tableusersController::class, 'signup']);
Route::post('AppUserLogin', [tableusersController::class, 'login']);
Route::patch('AppUser/{id}', [tableusersController::class, 'update']);
Route::patch('changePassword/{id}', [tableusersController::class, 'changePassword']);
Route::post('userBloodGroup', [tableusersController::class, 'userBloodGroup']);



Route::get('AllBloodGroups', [bloodGroupController::class, 'index']);
Route::post('AddBloodGroup', [bloodGroupController::class, 'store']);


Route::get('AllHospitals', [hospitalsController::class, 'index']);
Route::post('AddHospital', [hospitalsController::class, 'store']);


Route::get('AllAmbulances', [ambulancesController::class, 'index']);
Route::get('Ambulance/{id}', [ambulancesController::class, 'show']);
Route::post('AddAmbulance', [ambulancesController::class, 'store']);


Route::get('AllDiseases', [firstaidsController::class, 'index']);
Route::post('AddDisease', [firstaidsController::class, 'store']);



