<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ArquivoController;
use App\Http\Controllers\categoriaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisteredUserController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('register', [RegisteredUserController::class, 'create'])
    ->name('register');

    Route::get('/listagem', [ArquivoController::class, 'listagem'])->name('arquivo.listagem');
    
    Route::post('register', [RegisteredUserController::class, 'store']);

    Route::get('/arquivo', [ArquivoController::class, 'index'])->name('arquivo.index');
    Route::get('/arquivos/register', [ArquivoController::class, 'create'])->name('arquivo.create');

    Route::post('/arquivo-saved', [ArquivoController::class, 'store'])->name('arquivo.store');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');;
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    //Route::get('/profile',[categoriaController::class, 'create']->name('categoria.create'));
    //Route::get('/profile',[subcategoriaController::class, 'create']->name('subcategoria.create'));

   /* Route::get('/categoria/register',[categoriaController::class, 'create']->name('categoria.create'));
     Route::post('/categoria',[categoriaController::class, 'loja']->name('categoria.loja')); 
     Route::get('/categoria',[categoriaController::class, 'in']->name('categoria.in'));*/

     Route::get('/categoria', [categoriaController::class, 'index'])->name('categoria.index');
     Route::get('/subcategoria', [subcategoriaController::class, 'index'])->name('subcategoria.index');
     Route::get('/subcategoria', [categoriaController::class, 'index1'])->name('subcategoria.index1');
});

require __DIR__.'/auth.php';
