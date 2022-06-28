<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\CartController;


Route::get('/', function () {
    return view('index');
});

// Route::get('/users', function () {
//     return view('users');
// });

Route::get('/categories', function () {
    return view('categories');
});

Route::get('/giveCards', function () {
    return view('giveCards');
});

Route::get('/account', function () {
    return view('account');
});



Route::post('/register',[AuthController::class,'register'])->name('register');
Route::post('/login',[AuthController::class,'login'])->name('login');
Route::get('/logout',[AuthController::class,'logout'])->name('logout');


route::get('/users', [UsersController::class, 'getUsers'])->name('getUsers');
route::post('users/{id}', [UsersController::class, 'update'])->whereNumber('id')->name('updateUsers');
route::delete('delete/{id}', [UsersController::class,'destroy'])->name('delete');
route::get('user/{id}', [UsersController::class, 'showUsers'])->whereNumber('id')->name('readUsers');

Route::get('/',[ProductController::class,'getProduct']);

Route::post('/actif/{id}', [UsersController::class,'activisor'])->whereNumber('id');
Route::get('/card/{id}',[ProductController::class,'getOneProduct'])->whereNumber('id')->name('getCard');;

Route::get('/cart',[CartController::class,'getCart'])->name('cart');
Route::get('/addtocart/{id}',[CartController::class,'addtoCart'])->whereNumber('id');
Route::get('/deletefromcart/{id}',[CartController::class,'deletefromCart'])->whereNumber('id');



route::get('/giveCards', [ProductController::class, 'getAllProducts'])->name('getAllProducts');
// route::post('giveCards/{id}', [ProductController::class, 'updateProducts'])->whereNumber('id')->name('updateProducts');
// route::delete('delete/{id}', [ProductController::class,'destroy'])->name('delete');
 route::get('card/{id}', [ProductController::class, 'showProducts'])->whereNumber('id');

route::post('/card/{id}', [ProductController::class, 'addProduct'])->name('addProduct');
