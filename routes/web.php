<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\SubCategoryController;
use App\Models\Cart;
use App\Models\Category;
use App\Models\Order;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::middleware('auth')->group(function(){
    Route::get('/profile', function(){
        return view('profile');
    });
    Route::get('/cart', [CartController::class,'cart']);

    Route::get('/order', [OrderController::class,'order']);

    Route::post('/addtocart/{id}',[CartController::class,'addToCart'])->name('addtocart');

    Route::get('/buynow/{id}',[ProductsController::class,'buyNow']);

    Route::post('/buynow/{id}',[User::class,'buyNow']);

    Route::post('/checkoutall',[CartController::class,'checkOutAll']);

    Route::post('/removeFromCart/{id}',[CartController::class,'removeItem']);

    Route::post('/add_review/{id}',[ReviewController::class,'addReview']);

    Route::post('/profile/edit',[User::class,'profileUpdate']);

});


Route::get('/category',[CategoryController::class,'index']);

Route::get('/subcategory/{subcategory:id}',[SubCategoryController::class,'showSubCategory'])->name('product._subcategory');

Route::get('/products/{product:id}',[ProductsController::class,'showProducts'])->name('product._products');

Route::get('/products/{product:id}/buynow',function()
{
    return view('/product._checkout');
});


Route::get('/product/{single_product:id}',[ProductsController::class,'singleProduct'])->name('product._single_product');

Route::get('/aboutus',function(){
    return view('about');
});
