<?php

use App\Http\Controllers\PizzaController;
use Illuminate\Support\Facades\Route;

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

# Views
Route::get('pizzas', [PizzaController::class, 'index'])->name('pizza.list');
Route::get('pizzas/create', [PizzaController::class, 'createView'])->name('pizza.create.view');
Route::get('pizzas/{id}/edit', [PizzaController::class, 'editView'])->name('pizza.edit.view');
Route::get('pizzas/{id}/show', [PizzaController::class, 'showView'])->name('pizza.show.view');

# Routes
Route::post('pizzas', [PizzaController::class, 'create'])->name('pizza.create');
Route::get('pizzas/{id}', [PizzaController::class, 'retrieve'])->name('pizza.retrieve');
Route::patch('pizzas/{id}', [PizzaController::class, 'update'])->name('pizza.update');
Route::delete('pizzas/{id}', [PizzaController::class, 'delete'])->name('pizza.delete');
