<?php

use App\Http\Controllers\ProductsController;
use App\Http\Controllers\StoreController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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
// Common Resource Routes:
// index - Show all listings
// show - Show single listing
// create - Show form to create new listing
// store - Store new listing
// edit - Show form to edit listing
// update - Update listing
// destroy - Delete listing  

// new route => new controller method => new view 

Route::get('/', [ProductsController::class, 'index_Landing']);

Route::get('/all-products', [ProductsController::class,'index']);

Route::get('/product-details/{id}', [ProductsController::class, 'show']);

Route::get('/about-us', function () {
    return view('aboutus');
});

Route::get('/contact-us', function () {
    return view('contact');
});

// *************************
// REGISTER 
// *************************
//show register/create form
Route::get('/signup-new-user',[UserController :: class,'create']);

//create new user
Route::post('/signup-new-user/new',[UserController :: class,'store']);

//log user out
Route::post('/logout',[UserController :: class,'logout']);

//show log in form
Route::get('/login',[UserController :: class,'login']);

//login user
Route::post('/users/authenticate',[UserController :: class,'authenticate']);

// register with google account
Route::get('auth/google',[UserController :: class,'redirectToGoogle'] )->name('auth.google');
Route::get('auth/google/callback',[UserController :: class,'handleGoogleCallback'] );


// register with facebook account
Route::get('auth/facebook',[UserController :: class,'redirectToFacebook'] );
Route::get('callback/facebook',[UserController :: class,'handleFacebookCallback'] );

Route::get('/signup-new-seller', [StoreController::class, 'create']);
Route::get('/store', [StoreController::class, 'show']);
Route::post('/signup-new-seller/new', [StoreController::class, 'store']);
Route::post('/product/new', [ProductsController::class, 'store']);



Route::get('/profile', function () {
    return view('users.user_profile');
});

Route::get('/wishlist', function () {
    return view('orders.wishlist');
});

Route::get('/cart', function () {
    return view('orders.cart');
});

Route::get('/checkout', function () {
    return view('orders.checkout');
});

Route::get('/receipt', function () {
    return view('orders.receipt');
});


