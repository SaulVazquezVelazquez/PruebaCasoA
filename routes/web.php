<?php

use App\Http\Controllers\GestionEquipoController;
use App\Models\ProductosController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});



// Route::resource('/gestion_equipo', Gestion_Equipo::class)->names('gestion_equipo.inicio');  
Route::resource('/gestion_equipo', GestionEquipoController::class)->names('gestion_equipo.inicio');
// Route::post('/gestion_equipo', [GestionEquipoController::class, 'saveEquipo'])->name('gestion_equipo.inicio.saveEquipo');
// Route::resource('/productos', ProductosController::class)->names('productos.inicio');

// Route::get('/gestion_equipo', [Gestion_Equipo::class, 'index'])->name('gestion_equipo.inicio');

// Route::get('/gestion_equipo')->name('gestion_equipo.inicio');

// Route::get('/gestion_equipo', function () {
//     return view('gestion_equipo.index');
// })->name('gestion_equipo.inicio');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// Route::get('/productos/index', [ProductosController::class , 'index'])->names('productos.index');    

  

