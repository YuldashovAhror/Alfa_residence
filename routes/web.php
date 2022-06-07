<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TypeController;
use App\Http\Controllers\FlatController;
use App\Http\Controllers\PhaseController;
use App\Http\Controllers\BuildingController;
use App\Http\Controllers\FloorController;
use App\Http\Livewire\Dashboard;

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
    Route::get('/dashboard', Dashboard::class)->name('dashboard');
});

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


Route::post('/phase',[PhaseController::class,'store'])->name('phase.store');


Route::post('/building',[BuildingController::class,'store'])->name('building.store');

Route::post('/floor',[FloorController::class,'store'])->name('floor.store');


