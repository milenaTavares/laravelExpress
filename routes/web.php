<?php

use App\Http\Controllers\TesteController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\PostsAdminController;
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

Route::group(['prefix'=>'admin'], function () {
    
    Route::group(['prefix'=>'posts'], function () {

        Route::get('', [PostsAdminController::class, 'index'])->name('admin.posts.index');
        Route::get('create', [PostsAdminController::class, 'create'])->name('admin.posts.create');
        Route::post('store', [PostsAdminController::class, 'store'])->name('admin.posts.store');
        Route::get('edit/{id}', [PostsAdminController::class, 'edit'])->name('admin.posts.edit');
        Route::put('update/{id}', [PostsAdminController::class, 'update'])->name('admin.posts.update');
        Route::get('destroy/{id}', [PostsAdminController::class, 'destroy'])->name('admin.posts.destroy');

    });
});
