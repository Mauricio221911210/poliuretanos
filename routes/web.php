<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\CategoryController;
use App\Models\Category;

Route::get('/', [PostController::class, 'index'])->name('posts.index');

Route::get('posts/{post}', [PostController::class, 'show'])->name('posts.show');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

                                    /* Rutas de Administrador */  /* NO SE PUDO MODIFICAR EN EL ROUTESERVICEPROVIDER TODO SE HARA DESDE E WEB */

Route::middleware(['auth'])->get('/admin',[HomeController::class, 'index'] );

Route::middleware(['auth'])->resource('categories', CategoryController::class)->names('admin.categories');


                                    






