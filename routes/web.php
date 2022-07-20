<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodosController;
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

Route::get('/tareas', [TodosController::class, 'index']) -> name ('todos');

Route::post('/tareas', [TodosController::class, 'store']) -> name ('todos');

                                    /* USAREMOS "EDIT" PARA MOSTRAR UN ELEMENTO INDIVIDUALMENTE */
Route::get('/tareas/{id}', [TodosController::class, 'store', 'show']) -> name ('todos-edit');
                                    /* USAREMOS "UPDATE" PARA EJECUTAR LA ACCIÓN DE MOSTRARLO */
Route::patch('/tareas', [TodosController::class, 'store']) -> name ('todos-update');
                                    /* "DESTROY" PARA ELIMINARLA */
Route::delete('/tareas', [TodosController::class, 'store']) -> name ('todos-destroy');
