<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/products', [ProductController::class, 'index'])->name('products.index');

Route::get('products/create-step-one', [ProductController::class, 'createStepOne'])->name('products.create.step.one');
Route::post('products/create-step-one', [ProductController::class, 'postCreateStepOne'])->name('products.create.step.one.post');

Route::get('products/create-step-two', [ProductController::class, 'createStepTwo'])->name('products.create.step.two');
Route::post('products/create-step-two', [ProductController::class, 'postCreateStepTwo'])->name('products.create.step.two.post');

Route::get('products/create-step-three', [ProductController::class, 'createStepThree'])->name('products.create.step.three');
Route::post('products/create-step-three', [ProductController::class, 'postCreateStepThree'])->name('products.create.step.three.post');
