<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\LlantasController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\CategoriesController;


Route::prefix('/admin')->group(function(){
    Route::get('/', [DashboardController::class, 'getDashboard']);
    Route::get('/users', [UserController::class, 'getUsers']);

    //Module Llantas
    Route::get('/llantas', [LlantasController::class, 'getLlantas']);
    Route::get('/llantas/add', [LlantasController::class, 'getLlantasAdd']);
    Route::post('/llantas/add', [LlantasController::class, 'postLlantasAdd']);


    //Categories
    Route::get('/categories/{module}', [CategoriesController::class, 'getHome']);
    Route::post('/category/add', [CategoriesController::class, 'postCategoryAdd']);
    Route::get('/category/{id}/edit', [CategoriesController::class, 'getCategoryEdit']);
    Route::post('/category/{id}/edit', [CategoriesController::class, 'postCategoryEdit']);
    Route::get('/category/{id}/delete', [CategoriesController::class, 'getCategoryDelete']);

     //Module blog
     Route::get('/blog', [BlogController::class, 'getBlogs']);
     Route::get('/blog/add', [BlogController::class, 'getBlogsAdd']);






});


?>


