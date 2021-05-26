<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\SubCategoryController;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::middleware('auth')->group(function(){
    Route::get('/profile', function(){
        return view('profile');
    });

    
});


Route::get('/category',[CategoryController::class,'index']);

Route::get('/subcategory/{subcategory:id}',[SubCategoryController::class,'showSubCategory'])->name('product._subcategory');

Route::get('/products/{product:id}',[ProductsController::class,'showProducts'])->name('product._products');


Route::get('/product/{single_product:id}',[ProductsController::class,'singleProduct'])->name('product._single_product');

