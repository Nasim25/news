<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\SubcategoryController;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('admin.home');
})->name('dashboard');

Route::get('admin/logout',[AdminController::class,'logout'])->name('admin.logout');
Route::resource('category',CategoryController::class);
Route::resource('subcategory',SubcategoryController::class);