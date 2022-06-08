<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TypeController;
use App\Http\Controllers\FlatController;
use App\Http\Controllers\PhaseController;
use App\Http\Controllers\BuildingController;
use App\Http\Controllers\FloorController;
use App\Http\Controllers\Front\ProductsController;
use App\Http\Livewire\Dashboard;
use App\Models\Building;
use App\Models\Flat;
use App\Models\Floor;
use App\Models\Phase;

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

// if (session()->get('locale') == '') {
//     session()->put('locale', 'ru');
//     app()->setLocale('ru');
// } else {
//     app()->setLocale(session()->get('locale'));
// }
// $lan = session()->get('locale');
// return view('welcome', compact('lan'));

Route::get('/', [ProductsController::class,'index']
);

Route::get('/languages/{loc}', function ($loc) {
    if (in_array($loc, ['ru', 'uz'])) {
        session()->put('locale', $loc);
    }
    return redirect()->back();
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', Dashboard::class)->name('dashboard');
});

Route::resources([
    'words' => \App\Http\Controllers\WordsController::class,
]);

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

Route::get('choose', function(){
    $request = request();
    if($request->phase){
        $query = [];
        $phase = Phase::find((int)$request->phase);
        $buildings = Building::find((int)$request->building_id);
        $floor = Floor::find((int)$request->floor_id);
        $quantity = (int)$request->quantity;
        $area = (double)$request->area;

        if($phase){
            $query[] = ['phase_id', $phase->id];
        }
        if($buildings){
            $query[] = ['building_id', $buildings->id];
        }
        if($floor){
            $query[] = ['floor_id', $floor->id];
        }
        if($quantity){
            $query[] = ['quantity', $quantity];
        }
        if($area){
            $query[] = ['area', $area];
        }

        $flats = Flat::where($query)->get();
        return view('choose',compact('flats'));
    }
    $flats = Flat::all();
    return view('choose', compact('flats'));    

});