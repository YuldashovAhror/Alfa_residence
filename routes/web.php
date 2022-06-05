<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PhaseController;
use App\Http\Controllers\BuildingController;
use App\Http\Controllers\FloorController;
use App\Http\Controllers\TypeController;
use App\Http\Controllers\FlatController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

//////// Phase //////////

Route::get('/phase',[PhaseController::class,'index'])->name('phase');
Route::get('/phase/create',[PhaseController::class,'create'])->name('phase.create');
Route::post('/phase',[PhaseController::class,'store'])->name('phase.store');
Route::get('/phase/{id}/edit',[PhaseController::class,'edit'])->name('phase.edit');
Route::put('/phase/{id}/update',[PhaseController::class,'update'])->name('phase.update');
Route::delete('/phase/{id}',[PhaseController::class,'destroy'])->name('phase.destroy');

/////// Buildings /////////

Route::get('/building',[BuildingController::class,'index'])->name('building');
Route::get('/building/create',[BuildingController::class,'create'])->name('building.create');
Route::post('/building',[BuildingController::class,'store'])->name('building.store');
Route::get('/building/{id}/edit',[BuildingController::class,'edit'])->name('building.edit');
Route::put('/building/{id}/update',[BuildingController::class,'update'])->name('building.update');
Route::delete('/building/{id}',[BuildingController::class,'destroy'])->name('building.destroy');

///// Floor ///////

Route::get('/floor',[FloorController::class,'index'])->name('floor');
Route::get('/floor/create',[FloorController::class,'create'])->name('floor.create');
Route::post('/floor',[FloorController::class,'store'])->name('floor.store');
Route::get('/floor/{id}/edit',[FloorController::class,'edit'])->name('floor.edit');
Route::put('/floor/{id}/update',[FloorController::class,'update'])->name('floor.update');
Route::delete('/floor/{id}',[FloorController::class,'destroy'])->name('floor.destroy');

////// Type ///////

Route::get('/type',[TypeController::class,'index'])->name('type');
Route::get('/type/create',[TypeController::class,'create'])->name('type.create');
Route::post('/type',[TypeController::class,'store'])->name('type.store');
Route::get('/type/{id}/edit',[TypeController::class,'edit'])->name('type.edit');
Route::put('/type/{id}/update',[TypeController::class,'update'])->name('type.update');
Route::delete('/type/{id}',[TypeController::class,'destroy'])->name('type.destroy');

///// Flat ///////

Route::get('/flat',[FlatController::class,'index'])->name('flat');
Route::get('/flat/create',[FlatController::class,'create'])->name('flat.create');
Route::post('/flat',[FlatController::class,'store'])->name('flat.store');
Route::get('/flat/{id}/edit',[FlatController::class,'edit'])->name('flat.edit');
Route::put('/flat/{id}/update',[FlatController::class,'update'])->name('flat.update');
Route::delete('/flat/{id}',[FlatController::class,'destroy'])->name('flat.destroy');

