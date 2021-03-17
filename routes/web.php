<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\AdminController;

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

Route::get('/', [AdminController::class, 'index'])->name('index');

Route::get('/datosEmpresa', [AdminController::class, 'datosEmpresa'])->name('datosEmpresa');
Route::get('/documentos', [AdminController::class, 'documentos'])->name('documentos');
Route::get('/nuevoCliente', [AdminController::class, 'nuevoCliente'])->name('nuevoCliente');
Route::get('/listadoCliente', [AdminController::class, 'listadoCliente'])->name('listadoCliente');
Route::get('/proovedores', [AdminController::class, 'proovedores'])->name('proovedores');
Route::get('/nuevoProveedor', [AdminController::class, 'nuevoProveedor'])->name('nuevoProveedor');
Route::get('/mainOrden', [AdminController::class, 'mainOrden'])->name('mainOrden');
Route::get('/presupuestos', [AdminController::class, 'presupuestos'])->name('presupuestos');
Route::get('/cotizaciones', [AdminController::class, 'cotizaciones'])->name('cotizaciones');
Route::get('/ordenDeProducto', [AdminController::class, 'ordenDeProducto'])->name('ordenDeProducto');
Route::get('/ordenDeCompra', [AdminController::class, 'ordenDeCompra'])->name('ordenDeCompra');
Route::get('/solicitudFacturacion', [AdminController::class, 'solicitudFacturacion'])->name('solicitudFacturacion');
Route::get('/RecursosTangibles', [AdminController::class, 'RecursosTangibles'])->name('RecursosTangibles');
Route::get('/RecursosIntangibles', [AdminController::class, 'RecursosIntangibles'])->name('RecursosIntangibles');
Route::get('/cuentasPorCobrar', [AdminController::class, 'cuentasPorCobrar'])->name('cuentasPorCobrar');