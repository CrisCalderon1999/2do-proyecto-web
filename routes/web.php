<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LaboratorioController;

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
Route::put('createLaboratorio', [LaboratorioController::class, 'show'])->name('laboratorio.show');



