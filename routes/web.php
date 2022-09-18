<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LaboratorioController;
use App\Http\Controllers\PresentacionController;
use App\Http\Controllers\ViaAdministracionController;

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

Route::get('/', function () {return view('welcome');})->name('inciarsesion');

Route::get('vistaAdministrador', function () {return view('vistaAdministrador');})->name('vistaad');

//Rutas de laboratorio

Route::get('indexLaboratorio', [LaboratorioController::class, 'index'])->name('laboratorio.index');
Route::get('createLaboratorio', [LaboratorioController::class, 'create'])->name('laboratorio.create');
Route::post('createLaboratorio', [LaboratorioController::class, 'store'])->name('laboratorio.store');
Route::get('editLaboratorio{id}', [LaboratorioController::class, 'edit'])->name('laboratorio.edit');
Route::put('editLaboratorio{id}', [LaboratorioController::class, 'update'])->name('laboratorio.update');
Route::get('deleteLaboratorio{id}', [LaboratorioController::class, 'show'])->name('laboratorio.show');
Route::delete('deleteLaboratorio{id}', [LaboratorioController::class, 'destroy'])->name('laboratorio.delete');

//Rutas de Presentacion
Route::get('indexPresentacion', [PresentacionController::class, 'index'])->name('presentacion.index');
Route::get('createPresentacion', [PresentacionController::class, 'create'])->name('presentacion.create');
Route::post('createPresentacion', [PresentacionController::class, 'store'])->name('presentacion.store');
Route::get('editPresentacion{id}', [PresentacionController::class, 'edit'])->name('presentacion.edit');
Route::put('editPresentacion{id}', [PresentacionController::class, 'update'])->name('presentacion.update');
Route::get('deletePresentacion{id}', [PresentacionController::class, 'show'])->name('presentacion.show');
Route::delete('deletePresentacion{id}', [PresentacionController::class, 'destroy'])->name('presentacion.delete');


