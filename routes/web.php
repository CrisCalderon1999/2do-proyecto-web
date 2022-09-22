<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LaboratorioController;
use App\Http\Controllers\PresentacionController;
use App\Http\Controllers\ViaAdministracionController;
use App\Http\Controllers\MedicamentoController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ClientemisController;
use App\Http\Controllers\MiscelaneaController;
use App\Http\Controllers\LoginController;

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
Route::get('vistaCliente', function () {return view('vistaCliente');})->name('vistacli');
Route::get('vistasuper', function () {return view('vistasuper');})->name('vistasuper');

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

//Rutas de Via de administracion
Route::get('indexVia', [ViaAdministracionController::class, 'index'])->name('via.index');
Route::get('createVia', [ViaAdministracionController::class, 'create'])->name('via.create');
Route::post('createVia', [ViaAdministracionController::class, 'store'])->name('via.store');
Route::get('editVia{id}', [ViaAdministracionController::class, 'edit'])->name('via.edit');
Route::put('editVia{id}', [ViaAdministracionController::class, 'update'])->name('via.update');
Route::get('deleteVia{id}', [ViaAdministracionController::class, 'show'])->name('via.show');
Route::delete('deleteVia{id}', [ViaAdministracionController::class, 'destroy'])->name('via.delete');

//Rutas de Medicamentos
Route::get('indexMedicamentos', [MedicamentoController::class, 'index'])->name('medicamentos.index');
Route::get('createMedicamentos', [MedicamentoController::class, 'create'])->name('medicamentos.create');
Route::post('createMedicamentos', [MedicamentoController::class, 'store'])->name('medicamentos.store');
Route::get('editMedicamentos{id}', [MedicamentoController::class, 'edit'])->name('medicamentos.edit');
Route::put('editMedicamentos{id}', [MedicamentoController::class, 'update'])->name('medicamentos.update');
Route::get('deleteMedicamentos{id}', [MedicamentoController::class, 'show'])->name('medicamentos.show');
Route::delete('deleteMedicamentos{id}', [MedicamentoController::class, 'destroy'])->name('medicamentos.delete');

Route::get('indexCliente', [ClienteController::class, 'index'])->name('cliente.index');
Route::get('detallesCliente{id}', [ClienteController::class, 'show'])->name('cliente.detalles');
Route::get('indexClienteMiscelanea', [ClientemisController::class, 'index'])->name('clientemis.index');
Route::get('detallesClienteMiscelanea{id}', [ClientemisController::class, 'show'])->name('clientemis.show');


//Rutas de Medicamentos
Route::get('indexMiscelanea', [MiscelaneaController::class, 'index'])->name('miscelanea.index');
Route::get('createMiscelanea', [MiscelaneaController::class, 'create'])->name('miscelanea.create');
Route::post('createMiscelanea', [MiscelaneaController::class, 'store'])->name('miscelanea.store');
Route::get('editMiscelanea{id}', [MiscelaneaController::class, 'edit'])->name('miscelanea.edit');
Route::put('editMiscelanea{id}', [MiscelaneaController::class, 'update'])->name('miscelanea.update');
Route::get('deleteMiscelanea{id}', [MiscelaneaController::class, 'show'])->name('miscelanea.show');
Route::delete('deleteMiscelanea{id}', [MiscelaneaController::class, 'destroy'])->name('miscelanea.delete');


//login
Route::post('login', [LoginController::class, 'store'])->name('login.store');