<?php

use App\Http\Controllers\TaskController;
use App\Http\Controllers\TestUsersController;
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

// [App\Http\Controllers\TestUsersController, 'index']
// Route::get('teste/users', [TestUsersController::class, 'index']);
// Route::get('teste/user/{id}', [TestUsersController::class, 'show']);

// // LISTAGEM TOTAL (INDEX)
// Route::get('tasks', [TaskController::class, 'index'])->name('tasks.index');

// // CRIAÇÃO (CREATE/STORE)
// Route::post('tasks', [TaskController::class, 'store'])->name('tasks.store');
// Route::get('tasks/create', [TaskController::class, 'create'])->name('tasks.create');

// // VISUALIZAÇÃO ÚNICA (SHOW)
// Route::get('tasks/{task}', [TaskController::class, 'show'])->name('tasks.show');

// // ATUALIZAÇÃO (EDIT/PUT/PATCH)
// Route::put('tasks/{task}', [TaskController::class, 'update'])->name('tasks.update');
// Route::get('tasks/{task}/edit', [TaskController::class, 'edit'])->name('tasks.edit');

// // DELETAR (DELETE/DESTROY)
// Route::delete('tasks/{task}', [TaskController::class, 'destroy'])->name('tasks.destroy');

Route::get('/welcome', function () {
    return view('welcome');
});

Route::middleware('auth')->group(function () {
    Route::get('/', [TaskController::class, 'index'])->name('tasks.index');
    Route::resource('tasks', TaskController::class);
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
